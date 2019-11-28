<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TestController extends Controller
{
    public function test(){
        // $specialties = DB::select('select * from SPECIALTIES');
        
        // return view('welcome', compact('specialties'));

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


        $subjects = [
            'subject1' => $sub1_n,
            'subject2' => $sub2_n
        ];
        $sql_query = 'select code from Specialties where subject1 = \'' . $sub1_n . '\' and subject2 = \'' . $sub2_n . '\' 
        or subject1 = \''.$sub2_n . '\' and subject2  = \'' .$sub1_n . '\'';
        
        $directions = DB::select('select unique(prof_direction) from professions where code in ('.$sql_query.')');
        
        // $sql_query = 'select unique(direction) from full_data where subject1 = \'' . $sub1_n . '\' and subject2 = \'' . $sub2_n . '\' 
        // or subject1 = \''.$sub2_n . '\' and subject2  = \'' .$sub1_n . '\'';

        return view('show_direction', compact('directions', 'subjects'));
    }

    public function showProfessions(Request $request){
        $directions = $request->input('item');       

        $subjects = $request->input('subjects');

        $sql_query = 'select p.prof_name, min(p.prof_description) as prof_description from professions p, specialties s 
                    where p.code = s.code and (s.subject1 = \'' . $subjects[0] . '\' and s.subject2 = \'' . $subjects[1] . '\' 
                    or s.subject1 = \''.$subjects[1] . '\' and s.subject2  = \'' .$subjects[0] . '\') and p.prof_direction in (';

        for ($i=0; $i < count($directions); $i++) { 
            $sql_query = $sql_query.'\'' .  $directions[$i] . '\',';
        }
        $sql_query = substr_replace($sql_query, ')', strlen($sql_query)-1);

        $sql_query = $sql_query . ' group by p.prof_name';

        $professions = DB::select($sql_query);

        return view('show_professions')->with('professions',$professions);
    } 
    public function showSpecialties(Request $request){

        $codes = $request->input('item');        

        return view('show_specialties')->with('codes', $codes);
    }
    public function recieveData(Request $request){
        
        $box = $request->all();        
        $myValue = array();
        parse_str($box['body'], $myValue);
        
        $codes = $myValue['item'];
        // print_r($myValue['item'][0]);

        $query = 'select * from full_data where code in ( ';

        for ($i=0; $i < count($codes); $i++) { 
            $query = $query.'\'' .  $codes[$i] . '\',';
        }
        $query = substr_replace($query, ')', strlen($query)-1);

        
        $data = DB::select($query);
        // var_dump($data);

        return response()->json($data);


    }
}




