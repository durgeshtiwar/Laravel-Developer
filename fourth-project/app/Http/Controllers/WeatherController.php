<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function fetchWeather()
    {
        $weatherResponse = [];
        $weatherResponse = Http::get('https://api.weatherapi.com/v1/current.json?key=b16ce6c940c14817a26113929242309&q=delhi');
        echo"<pre>";
        return view('weather',['result'=>json_decode($weatherResponse)]);
    }
}
