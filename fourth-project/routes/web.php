<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\WeatherController;

Route::get('/', function () {
    return view('welcome');
});

// Mail Route
//Route::get("send-mail",[MailController::class,"sendEmail"]);
Route::match(["get","post"],"weather",[WeatherController::class,"fetchWeather"]);
