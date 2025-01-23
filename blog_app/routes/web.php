<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogController_2;

Route::get('/', function () {
    return view('welcome');
});

//Normal method_1 
Route::get('blog',[BlogController_2::class,'index'])->name('blog.index');
Route::get('blog/create',[BlogController_2::class,'create'])->name('blog.create');
Route::get('blog/{blog}',[BlogController_2::class,'show'])->name('blog.show');
Route::get('blog/{blog}/edit',[BlogController_2::class,'edit'])->name('blog.edit');

//Resource controller
//Route::resource('blog', BlogController::class);