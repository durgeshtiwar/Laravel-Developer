<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    function submit(Request $request)
    {
        $request->session()->put('user',$request->name);
        return redirect('About');
        // echo"Request Method is ".$request->method();
        // echo"<br>";
        // echo"Request Path is ".$request->path();
        // echo"<br>";
        // echo"Request URL is ".$request->url();
        // echo"<br>";
    }
    function logout()
    {
        session()->pull('user');
        return redirect('About');
    }
}
