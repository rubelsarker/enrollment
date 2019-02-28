<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use Illuminate\Support\Facades\Redirect;
use DB;

use Session;
Session_start();

class TeacherController extends Controller
{
    //
    public function allteacher(Request $request)
    {
        $allteacher_info=DB::table('teachers_table')
            ->get();
        $manage_tacher=view('admin.allteacher')
            ->with('allteacher_info',$allteacher_info);
        return view('layout')
            ->with('allteacher',$manage_tacher);


        Session::put('exception','Teacher added succesfully!!');
    }

    public function addteacher(Request $request)
    {
        return view('admin.addteacher');
       // echo "weldone";
    }
    public function saveteacher(Request $request)
    {
        $data=array();
        $data['teacher_name']=$request->teacher_name;

        $data['teacher_address']=$request->teacher_address;
        $data['teacher_phone']=$request->teacher_phone;

        $data['teacher_department']=$request->teacher_department;





        DB::table('teachers_table')->insert($data);
        Session::put('exception','Teacher added succesfully!!');
        return Redirect::to('/allteacher');
    }
}
