<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\patientsController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/asad',function(){
    return "Hello Ibrahim";
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware('auth')->group(function(){
    Route::get('/dashboard',[pagesController::class,'dashboard'])->name('dashboard'); // dashboard ..
    Route::get('/settings',[pagesController::class,'settings'])->name('settings'); // for settings ..
    Route::get('/specialites',[pagesController::class,'specialites'])->name('specialites');  // specialites ..
    Route::post('/save/specialites',[pagesController::class,'save_specialites'])->name('specialites.save'); // save ..
    Route::get('/specialites/{id}',[pagesController::class,'delete_special'])->name('delete.special'); // delete ..
    Route::get('/specialites/edit/{id}',[pagesController::class,'edit_special'])->name('special.edit'); // for edit ..
    Route::post('/specialites/update/{id}',[pagesController::class,'update_special'])->name('special.update'); // for update ..
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
    Route::prefix('doctors')->group(function(){
        Route::get('/',[pagesController::class,'doctors'])->name('doctors'); // all doctors ..
        Route::post('/save',[pagesController::class,'save_doctor'])->name('save.doctor'); // save doctor ..
        Route::get('/edit/{id}',[pagesController::class,'edit_doctor'])->name('edit.doctor'); // edit doctor ..
        Route::post('/update/{id}',[pagesController::class,'update_doctor'])->name('update.doctor'); // update doctor ..
        Route::get('/delete/{id}',[pagesController::class,'delete_doctor'])->name('delete.doctor'); //delete doctor ..
    });
    // patients ..
    Route::prefix('patients')->group(function(){
        Route::get('/',[patientsController::class,'patients'])->name('patient');
        Route::post('/save',[patientsController::class,'patients'])->name('save.patient');
    });

});