<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    function upload(Request $request)
    {
        $path = $request->file('image')->store('images','public');
        $pathArray = explode("/",$path);
        $imgPath = $pathArray[1];
        $img = new Image();
        $img->path = $imgPath;
        return $img->save();
    } 
}
