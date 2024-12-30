<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    function uploadFile(Request $request)
    {
        $path = $request->file->storeAs('public','dummy1.png');
        $fileNameArray = explode('/',$path);
        $fileNAme = $fileNameArray[1];
        return view('About',['path'=>$fileNAme]);
        return $path;
    }
}
