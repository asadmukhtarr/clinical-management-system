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
    // create user ...
    public function create_user(){
        return view('users.create');
    }
    // for all users ..
    public function users(){
        return view('users.users');
    }
    // appintments ..
    public function all_appointments(){
        return view('appointments.all');
    }
    public function new_appointment(){
        return view('appointments.new');
    }
    // all doctors ...
    public function doctors(){
        return view('doctors');
    }
    // patients 
    public function patients(){
        return view('patients');
    }
}
