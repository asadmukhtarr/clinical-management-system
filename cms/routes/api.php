<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\doctor;
use App\Models\appointment;
use App\Models\patient;
use App\Models\specialities;

Route::get('/doctors',function(){
    $doctors = doctor::all();
    return response()->json($doctors);
});
Route::get('/doctor/{id}',function($id){
    $doctor = doctor::find($id);
    return response()->json($doctor);
});
Route::get('/appointments',function(){
    $appointments = appointment::with('doctor')->with('patient')->with('specialities')->get();
    return response()->json($appointments);
});
Route::get('/patient',function(){
    $patient = patient::all();
    return response()->json($patient);
});
Route::get('/patient/{id}',function($id){
    $patient = patient::find($id);
    return response()->json($patient);
});
Route::get('/specialities/{id}',function($id){
    $specialities = specialities::find($id);
    return response()->json($specialities);
});
Route::get('/specialities',function(){
    $specialities = specialities::all();
    return response()->json($specialities);
});
Route::get('/special/doctor/{id}',function($id){
   $doctor = doctor::where('specialities_id',$id)->get();
   return response()->json($doctor);
});
