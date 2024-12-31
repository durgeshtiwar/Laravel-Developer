<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FromInsertController;
Route::get('/', function () {
    return view('welcome');
});
Route::view('form','Form');
Route::view('formData','DisplayData');
Route::get('formData',[FromInsertController::class,'getData']);
Route::post('submit',[FromInsertController::class,'submit']);
Route::put('update/{id}',[FromInsertController::class,'update']);
Route::get('delete/{id}',[FromInsertController::class,'deleteData']);
Route::get('edit/{id}',[FromInsertController::class,'editData']);