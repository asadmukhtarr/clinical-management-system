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
