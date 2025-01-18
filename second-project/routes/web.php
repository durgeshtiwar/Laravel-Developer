<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FromInsertController;
use App\Http\Controllers\ImageController;
Route::get('/', function () {
    return view('welcome');
});
Route::view('form','Form');
Route::view('formData','DisplayData');
Route::view('loginForm','LoginForm');
Route::post('loginStudent',[FromInsertController::class,'loginStudent']);
Route::get('formData',[FromInsertController::class,'getData']);
Route::get('searchStudent',[FromInsertController::class,'searchStudent']);
Route::post('submit',[FromInsertController::class,'submit']);
Route::post('multi-delete',[FromInsertController::class,'multiDelete']);
Route::put('update/{id}',[FromInsertController::class,'update']);
Route::get('delete/{id}',[FromInsertController::class,'deleteData']);
Route::get('edit/{id}',[FromInsertController::class,'editData']);

// Image Upload 
Route::view('upload','Upload');
Route::post('upload',[ImageController::class,'upload']);
Route::get('imageList',[ImageController::class,'imageList']);

//Layouts
Route::view('home','HomePage');
Route::view('login','LoginPage');