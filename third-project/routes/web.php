<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('getStudent',[StudentController::class,'getStudent']);
Route::get('getOneToMany',[StudentController::class,'getOneToMany']);