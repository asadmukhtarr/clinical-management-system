<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\doctor;
use App\Models\appointment;
use App\Models\patient;

Route::get('/doctors',function(){
    $doctors = doctor::all();
    return response()->json($doctors);
});
Route::get('/appointments',function(){
    $appointments = appointment::all();
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