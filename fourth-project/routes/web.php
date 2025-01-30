<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

Route::get('/', function () {
    return view('welcome');
});

// Mail Route
Route::get("send-mail",[MailController::class,"sendEmail"]);