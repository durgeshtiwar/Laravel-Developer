<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConnectionController extends Controller
{
    //tailwindCss Connection
    public function index()
    {
        return view('connection');
    }
}
