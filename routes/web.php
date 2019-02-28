<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/logout','adminController@logout');

Route::get('/', function () {
    return view('student_loging');
});
Route::get('/backend', function () {
    return view('admin.admin_login');
});

//Route::get('/layout', function () {
//    return view('layout');
//});
Route::post('/adminlogin','adminController@login_dashboard');
Route::post('/studentlogin','adminController@student_login_dashboard');
Route::get('/admin_dashboard','adminController@admin_dashboard');
Route::get('/student_dashboard','adminController@student_dashboard');

Route::get('/addstudent','AddstudentsControler@addstudent');
Route::get('/student_logout','AddstudentsControler@studentlogout');
Route::get('/student_setting','AddstudentsControler@studentsetting');
Route::get('/student_profile','AddstudentsControler@studentprofile');
Route::get('/delete/{student_id}','AllstudentsController@delete');
Route::post('/update_student/{student_id}','AllstudentsController@update');
Route::get('/edit/{student_id}','AllstudentsController@edit');
Route::post('/save_student','AddstudentsControler@savestudent');
Route::get('/allstudent','AllstudentsController@allstudent');
Route::post('/student_own_update','AllstudentsController@studentownupdate');
Route::get('/view/{student_id}','AllstudentsController@view');
Route::get('/tutionfee','TutionControler@tutionfee');
Route::get('/cse','CseControler@cse');
Route::get('/eee','EeeControler@eee');
Route::get('/allteacher','TeacherController@allteacher');
Route::get('/addteacher','TeacherController@addteacher');
Route::post('/save_teacher','TeacherController@saveteacher');
Route::get('/setting','adminController@setting');
Route::get('/view','adminController@view');

