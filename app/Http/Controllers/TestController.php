<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class TestController extends Controller
{
    public function test(){
        $specialties = DB::select('select * from SPECIALTIES');
        
        return view('welcome', compact('specialties'));

    }
    public function chooseSubjects(){

        $subjects = DB::select('select subject1, subject2 from SPECIALTIES');
        //var_dump($subjects);
        return view('choose_subject', compact('subjects'));

    }
    public function showDirection(Request $request){

        $subjects = $request->input('item');
        $subject_list = [];
        for ($i=0; $i < count($subjects); $i++) { 
            if($subjects[$i]){
                array_push($subject_list,$subjects[$i]);
            }
        }
        
        $sub1 = $subject_list[0];
        $sub2 = null;

        if(count($subject_list)>1){
            $sub2 = $subject_list[1];
        }else{
            $sub2 = $sub1;
        }

        $subject1 = DB::select('select subject_name from subjects where subject_id = \''.$sub1.'\'');
        $subject2 = DB::select('select subject_name from subjects where subject_id = \''.$sub2.'\'');
        
        $sub1_n = $subject1[0]->subject_name;
        $sub2_n = $subject2[0]->subject_name;
        

        $sql_query = 'select unique(direction) from full_data where subject1 = \'' . $sub1_n . '\' and subject2 = \'' . $sub2_n . '\' 
        or subject1 = \''.$sub2_n . '\' and subject2  = \'' .$sub1_n . '\'';
        
        $directions = DB::select($sql_query);


        return view('show_direction', compact('directions'));
    }

    public function showProfessions(Request $request){
        $directions = $request->input('item');        
        
        $sql_query = 'select unique(prof_name), prof_description from full_data where 
        direction in (';

        for ($i=0; $i < count($directions); $i++) { 
            $sql_query = $sql_query.'\''.$directions[$i].'\',';
        }
        $sql_query = substr_replace($sql_query, ')', strlen($sql_query)- 1);        

        $professions = DB::select($sql_query);

        return view('show_professions')->with('professions',$professions);
    } 
    public function showSpecialties(Request $request){

        $professions = $request->input('item');        
        dd($professions);

    }
}




