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

}
