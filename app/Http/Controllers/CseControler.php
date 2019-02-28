<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  DB;

class CseControler extends Controller
{
    public function cse(Request $request){
        $csestudent_info=DB::table('student_table')
            ->where(['student_department'=>1])
            ->get();

        $manage_student=view('admin.cse')
            ->with('csestudent_info',$csestudent_info);
        return view('layout')
            ->with('cse',$manage_student);
        return view('admin.cse');

    }
}
