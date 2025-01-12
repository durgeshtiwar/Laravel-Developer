<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\MemberController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('getStudent',[StudentController::class,'getStudent']);
Route::get('getOneToMany',[StudentController::class,'getOneToMany']);
Route::get('getManyToOne',[StudentController::class,'getManyToOne']);

// Resource controller
//Route::get('index',[MemberController::class,'index']);