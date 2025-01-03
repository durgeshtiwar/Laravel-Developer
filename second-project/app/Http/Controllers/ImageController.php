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
        $img->save();
        if ($img) {
            return redirect('imageList');
        } else {
            return "File Not Uploaded";
        }
        
    } 
    function imageList(){
        $images = Image::all();
        return view('DisplayImage',['images'=>$images]);
    }
}
