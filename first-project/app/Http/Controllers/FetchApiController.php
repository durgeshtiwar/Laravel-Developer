<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FetchApiController extends Controller
{
    function fetchApi()
    {
        $result = Http::get('https://dummyjson.com/posts/1');
        $result = $result->body();
        return view('Api',['result'=>json_decode($result)]);
    }
}
