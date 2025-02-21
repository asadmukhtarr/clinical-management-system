<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\specialities;

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
    // save spec
    public function save_specialites(Request $request){
        $validated = $request->validate([
            'title' => 'required|min:6|max:30',
        ]);
        $special = new specialities;
        $special->title = $request->title;
        $special->save();
        return redirect()->back()->with('success','Speciality Created Succesfully');
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
