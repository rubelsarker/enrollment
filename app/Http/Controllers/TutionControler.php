<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TutionControler extends Controller
{
    public function tutionfee(Request $request){
        return view('admin.tutionfee');

    }
}
