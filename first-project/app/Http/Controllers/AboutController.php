<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    // controllers retrun views
    function show($name)
    {
        return view('About',['name'=>$name]);
    }
}
