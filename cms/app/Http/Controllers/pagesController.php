<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    // dashboard ..
    public function dashboard(){
        $data = "Asad Mukhtar | asadmukhtar.info";
        return view('dashboard',compact('data'));
    }
    // settings ..
    public function settings(){
        return view('settings');
    }
    //specialites
    public function specialites(){
        return view('specialites');
    }
}
