<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class patientsController extends Controller
{
    //
    // patients 
    public function patients(){
        return view('patients');
    }
    public function save(Request $request){
        return $request;
    }
}
