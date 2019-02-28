<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;

use Session;
Session_start();

class AddstudentsControler extends Controller
{
    //
    public function addstudent(){
    return view('admin.addstudent');

}
    public function savestudent(Request $request){
        $data=array();
        $data['student_name']=$request->student_name;
        $data['student_fathername']=$request->student_fathername;
        $data['student_mothername']=$request->student_mothername;
        $data['student_email']=$request->student_email;
        $data['student_phone']=$request->student_phone;
        $data['student_address']=$request->student_address;
        $data['student_admissoinyear']=$request->student_admissoinyear;
        $data['student_department']=$request->student_department;
        $data['student_password']=md5($request->student_password);
        $image = $request->file('student_image');
        if ($request->hasFile('student_image')){
            $image_name=str_random(20);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if($success){
                $data['student_image']=$image_url;
            DB::table('student_table')->insert($data);
            Session::put('exception','student added succesfully!!');
            return Redirect::to('/addstudent');
            }
        }

        $data['image']=$image_url;
        DB::table('student_table')->insert($data);
        Session::put('exception','student added succesfully!!');
        return Redirect::to('/addstudent');


        DB::table('student_table')->insert($data);
        Session::put('exception','student added succesfully!!');
        return Redirect::to('/addstudent');


    }

    public function studentprofile()
    {

        $student_id=Session::get('student_id');
        $student_profile=Db::table('student_table')
            ->select('*')
            ->where('student_id',$student_id)

            ->first();
//        echo "<pre>";
   //  print_r($student_profile);
        $manage_student=view('student.student_view')

            ->with('student_profile',$student_profile);
        return view('student_layout')
            ->with('view',$manage_student);
        //return view('student_view',$manage_student);
    }
        public function studentsetting()


        {
            $student_id=Session::get('student_id');
            $student_view=DB::table('student_table')
                ->select('*')
                ->where('student_id',$student_id)

                ->first();
//        echo "<pre>";
//       print_r($student_view);

            $manage_view=view('student.student_setting')

                ->with('student_profile',$student_view);
            return view('student_layout')
                ->with('student_setting',$manage_view);
           return view('student.student_setting');
        }

    public function studentlogout(){
        Session::put('student_name',null);
        Session::put('student_id',null);
        return Redirect::to('/');
       // return view('admin.addstudent');
        }
}
