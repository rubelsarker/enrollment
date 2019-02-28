<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use Illuminate\Support\Facades\Redirect;
use Session;
session_start();

class AllstudentsController extends Controller
{
    public function allstudent(Request $request){
        $allstudent_info=DB::table('student_table')
            ->get();
        $manage_student=view('admin.allstudent')
            ->with('allstudent_info',$allstudent_info);
        return view('layout')
            ->with('allstudent',$manage_student);

    }

    public function delete($student_id){
        DB::table('student_table')
            ->where('student_id',$student_id)
            ->delete();
        return Redirect::to('/allstudent');


    }

    public function edit($student_id){
        $student_view=DB::table('student_table')
            ->where('student_id',$student_id)
            ->select('*')
            ->first();
//        echo "<pre>";
//       print_r($student_view);

        $manage_view=view('admin.edit')

            ->with('student_profile',$student_view);
        return view('layout')
            ->with('edit',$manage_view);


    }

    public function view($student_id){

        $student_view=DB::table('student_table')
            ->where('student_id',$student_id)
            ->select('*')
            ->first();
//        echo "<pre>";
//        print_r($student_view);
        $manage_view=view('admin.view')

            ->with('student_profile',$student_view);
        return view('layout')
            ->with('view',$manage_view);


    }

    public function update(Request $request,$student_id){

        $data=array();
        $data['student_name']=$request->student_name;
        $data['student_fathername']=$request->student_fathername;
        $data['student_mothername']=$request->student_mothername;
        $data['student_email']=$request->student_email;
        $data['student_phone']=$request->student_phone;
        $data['student_address']=$request->student_address;
        $data['student_password']=md5($request->student_password);
        $data['student_admissoinyear']=$request->student_admissoinyear;
        DB::table('student_table')
            ->where('student_id',$student_id)
            ->update($data);
       Session::put('exception','student update succesfully!!');
        return Redirect::to('/allstudent');
    }
    public function studentownupdate(Request $request){
        $student_id=Session::get('student_id');
        $data=array();

        $data['student_password']=md5($request->student_password);

        DB::table('student_table')
            ->where('student_id',$student_id)
            ->update($data);
       Session::put('exception','student update succesfully!!');
        return Redirect::to('/');
    }


}
