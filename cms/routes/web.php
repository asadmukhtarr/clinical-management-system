<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/asad',function(){
    return "Hello Ibrahim";
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard',[pagesController::class,'dashboard'])->name('dashboard'); // dashboard ..
Route::get('/settings',[pagesController::class,'settings'])->name('settings'); // for settings ..
Route::get('/specialites',[pagesController::class,'specialites'])->name('specialites');  // specialites ..
// group routes .. after users ..
Route::prefix('users')->group(function(){
    Route::get('/create',[pagesController::class,'create_user'])->name('create.user'); // create user ..
    Route::get('/',[pagesController::class,'users'])->name('all.user'); // create user ..
});
// bookoings ..
Route::prefix('appoinments')->group(function(){
    Route::get('/new',[pagesController::class,'new_appointment'])->name('new.appointment'); // new  ..
    Route::get('/',[pagesController::class,'all_appointments'])->name('all.appointment'); // new  ..
});
// // doctors ..
Route::get('/doctors',[pagesController::class,'doctors'])->name('doctors'); // all doctors ..
Route::prefix('patients')->group(function(){
    Route::get('/',[pagesController::class,'patients'])->name('patient');
});
