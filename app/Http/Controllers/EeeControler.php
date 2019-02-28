<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EeeControler extends Controller
{
    //
    public function eee(Request $request){
        return view('admin.eee');
}
}
