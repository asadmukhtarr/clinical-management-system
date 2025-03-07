<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\patient;

class patientsController extends Controller
{
    //
    // patients 
    public function patients(){
        $petients = patient::orderby('id','desc')->get();
        return view('patients',compact('petients'));
    }
    public function save(Request $request){
        $request->validate([
            'name'    => 'required|string|max:255',
            'dob'     => 'required|date|before:today',
            'gender'  => ['required', Rule::in(['Male', 'Female', 'Other'])],
            'contact' => 'required|digits:10',
            'email'   => 'required|email|max:255|unique:users,email',
            'address' => 'required|string|max:500',
        ]);
        //return $request; // for testing ..
        $patient = new patient;
        $patient->name    = $request->name;
        $patient->dob     = $request->dob;
        $patient->gender  = $request->gender;
        $patient->contact = $request->contact;
        $patient->email   = $request->email;
        $patient->address = $request->address;
        $patient->save();  // Save to the database
        return redirect()->back()->with('success','Patient Inserted Succesfully');
    
    }
    public function destroy($id)
    {
        $user = patient::findOrFail($id);
        $user->delete();

        return redirect()->back()->with('success', 'User deleted successfully!');
    }
    public function edit($id)
    {
        $user = patient::findOrFail($id);
        return view('editp', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'dob'     => 'required|date|before:today',
            'gender'  => 'required|in:Male,Female,Other',
            'contact' => 'required|digits:10',
            'email'   => 'required|email',
            'address' => 'required|string|max:500',
        ]);

        $patient = patient::findOrFail($id);
        $patient->name    = $request->name;
        $patient->dob     = $request->dob;
        $patient->gender  = $request->gender;
        $patient->contact = $request->contact;
        $patient->email   = $request->email;
        $patient->address = $request->address;
        $patient->save();  // Save to the database

        return redirect()->route('patient')->with('success', 'User updated successfully!');
    }

}
