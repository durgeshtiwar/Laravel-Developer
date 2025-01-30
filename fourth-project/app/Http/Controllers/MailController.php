<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;

class MailController extends Controller
{
    // Mail Send
    public function sendEmail()
    {
        $to = "durgeshtiwari362592@gmail.com";
        $msg = "dummy Email";
        $subject = "Code Step By Step";
        Mail::to($to)->send(new WelcomeEmail($msg, $subject));
    }
}
