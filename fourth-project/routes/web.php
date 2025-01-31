<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\WeatherController;
use App\Http\Controllers\ConnectionController;

Route::get('/', function () {
    return view('welcome');
});

// Mail Route
//Route::get("send-mail",[MailController::class,"sendEmail"]);

// weather route
//Route::match(["get","post"],"weather",[WeatherController::class,"fetchWeather"]);

//connection route
Route::get('getcss',[ConnectionController::class,'index']);
