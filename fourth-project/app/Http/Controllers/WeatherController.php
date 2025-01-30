<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function fetchWeather()
    {
        $weatherResponse = [];
        $result = Http::get('https://api.weatherapi.com/v1/current.json?key=b16ce6c940c14817a26113929242309&q=delhi');
        $weatherResponse = $result->json();
        echo"<pre>";
        var_dump($weatherResponse);
        //print_r($result);
        // return view('Api',['result'=>json_decode($result)]);
    }
}
