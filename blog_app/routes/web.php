<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::get('/', function () {
    return view('welcome');
});

//Normal method_1 
// Route::get('blog',[BlogController::class,'index']);
// Route::get('blog/{blog}/edit',[BlogController::class,'edit']);

//Resource controller
Route::resource("blog",BlogController::class);