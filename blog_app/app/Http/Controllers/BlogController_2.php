<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController_2 extends Controller
{
    function index()
    {
        return view('blog.index');
    }
    function create()
    {
        return view('blog.create');
    }
    function edit()
    {
        return view('blog.edit');
    }
    function show()
    {
        return view('blog.show');
    }
}
