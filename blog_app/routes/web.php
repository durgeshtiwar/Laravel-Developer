<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogController_2;

Route::get('/', function () {
    return view('welcome');
});

//Normal method_1 
Route::view('create','blog.create');
Route::get('blog',[BlogController_2::class,'index']);
Route::post('submit',[BlogController_2::class,'submit']);
Route::get('blog/{blog}',[BlogController_2::class,'show']);
Route::get('blog/{blog}/edit',[BlogController_2::class,'edit']);

//Resource controller
//Route::resource('blog', BlogController::class);