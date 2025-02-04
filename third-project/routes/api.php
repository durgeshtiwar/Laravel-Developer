<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\MemberController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/test',function()
{
    return ['name'=>'durgesh tiwari','age'=>'21'];
});
Route::get('getAllStudentApi',[StudentController::class,'getAllStudentApi']);
Route::post('addStudentApi',[StudentController::class,'addStudentApi']);
Route::put('updateStudentApi',[StudentController::class,'updateStudentApi']);
Route::delete('deleteStudentApi/{id}',[StudentController::class,'deleteStudentApi']);
Route::get('searchStudentApi/{name}',[StudentController::class,'searchStudentApi']);

//Resource Controller 
//Route::resource('member',MemberController::class);