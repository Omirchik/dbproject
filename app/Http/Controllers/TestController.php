<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TestController extends Controller
{
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

        $result = DB::executeProcedure('slice_by', [
            'p_subject1'  => $sub1_n,
            'p_subject2'  => $sub2_n
        ]);

        $directions = DB::select('select unique(prof_direction) from vw_prof_spec');
        
        return view('show_direction', compact('directions'));
    }

    public function showProfessions(Request $request){
        $directions = $request->input('item');       

        
        $my_view = DB::select('select * from vw_prof_spec');


        $sql_query = 'select prof_name, min(prof_description) as prof_description from vw_prof_spec where prof_direction in (';

        for ($i=0; $i < count($directions); $i++) { 
            $sql_query = $sql_query.'\'' .  $directions[$i] . '\',';
        }
        $sql_query = substr_replace($sql_query, ')', strlen($sql_query)-1);

        $sql_query = $sql_query . ' group by prof_name';

        $professions = DB::select($sql_query);

        return view('show_professions')->with('professions',$professions);
    } 
    public function showSpecialties(Request $request){

        $prof_names = $request->input('item');        
        return view('show_specialties')->with('prof_names', $prof_names);
    }
    public function recieveData(Request $request){
        
        $box = $request->all();        
        $myValue = array();
        parse_str($box['body'], $myValue);
        
        $codes = $myValue['item'];
        // print_r($myValue['item'][0]);

        $region_id = $myValue['region_id'];

        $query = 'select distinct v.code, v.spec_name, v.kz_point, v.ru_point, u.univ_name, u.city, u.region_name, u.street 
            from vw_prof_spec v, universities u, bt_univ_spec bus 
            where u.region_id = ' . $region_id . ' and bus.spec_id = v.spec_id and bus.univ_id = u.univ_id and prof_name in ( ';

        for ($i=0; $i < count($codes); $i++) { 
            $query = $query.'\'' .  $codes[$i] . '\',';
        }
        $query = substr_replace($query, ')', strlen($query)-1);

        
        $data = DB::select($query);

        return response()->json($data);



    }
}




