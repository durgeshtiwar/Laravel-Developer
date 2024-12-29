<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    function submit(Request $request)
    {
        echo"Request Method is ".$request->method();
        echo"<br>";
        echo"Request Path is ".$request->path();
        echo"<br>";
        echo"Request URL is ".$request->url();
        echo"<br>";
    }
}
