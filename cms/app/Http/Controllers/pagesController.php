<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\specialities;
use App\Models\doctor;

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
        $specilities = specialities::orderby('id','desc')->get();
        return view('specialites',compact('specilities'));
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
    // delete ..
    public function delete_special($id){
        $special = specialities::find($id);
        $special->delete();
        return redirect()->back()->with('warning','speciality Delete Succesfully');
    }
    // edit ..
    public function edit_special($id){
        $special = specialities::find($id);
        return view('editspecial',compact('special'));
    }
    // update special ..
    public function update_special($id,Request $request){
        $validated = $request->validate([
            'title' => 'required|min:6|max:30',
        ]);
        $special = specialities::find($id);
        $special->title = $request->title;
        $special->save();
        return redirect()->back()->with('success','Speciality Update Succesfully');
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
        $specilities = specialities::orderby('id','desc')->get();
        $doctors = doctor::orderby('id','desc')->get();
        return view('doctors',compact('specilities','doctors'));
    }
    // save doct ..
    public function save_doctor(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'whatsapp' => 'required|digits:11',
            'description' => 'required|string|max:1000',
            'gender' => 'required|in:Male,Female,Other',
            'speciality' => 'required|integer|exists:specialities,id',
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $imageName = "";
        if($request->hasFile('picture')){
            $imageName = time().".".$request->picture->getClientOriginalExtension();
            $request->picture->storeAs('doctors',$imageName,'public');
        }
        $doctor = new doctor;
        $doctor->name = $request->name;
        $doctor->email = $request->email;
        $doctor->whatsapp = $request->whatsapp;
        $doctor->description = $request->description;
        $doctor->gender = $request->gender;
        $doctor->specialities_id = $request->speciality;
        $doctor->picture = $imageName;
        $doctor->save();
        return redirect()->back()->with('success','Doctor Created Succesfully');
    }
    // edit doctor ..
    public function edit_doctor($id){
        $doctor = doctor::find($id);
        $specilities = specialities::orderby('id','desc')->get();
        return view('editdoctor',compact('doctor','specilities'));
    }
    // update doctor ..
    public function update_doctor($id,Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'whatsapp' => 'required|digits:11',
            'description' => 'required|string|max:1000',
            'gender' => 'required|in:Male,Female,Other',
            'speciality' => 'required|integer|exists:specialities,id',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $imageName = "";
        $doctor = doctor::find($id);
        $doctor->name = $request->name;
        $doctor->email = $request->email;
        $doctor->whatsapp = $request->whatsapp;
        $doctor->description = $request->description;
        $doctor->gender = $request->gender;
        $doctor->specialities_id = $request->speciality;
        if($request->hasFile('picture')){
            $imageName = time().".".$request->picture->getClientOriginalExtension();
            $request->picture->storeAs('doctors',$imageName,'public');
            $doctor->picture = $imageName;
        }
        $doctor->save();
        return redirect()->back()->with('success','Doctor Updated Succesfully');
    }
    // delete doctor ..
    public function delete_doctor($id){
        $doctor = doctor::find($id);
        $doctor->delete();
        return redirect()->back()->with('warning','Doctor Deleted Succesfully');
    }
}
