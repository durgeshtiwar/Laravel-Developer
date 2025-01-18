<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CondidateController extends Controller
{
    function submit(Request $request)
    {
        $student = new User();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->address = $request->address;
        $student->file = $request->file;
        $student->degree = $request->degree;
        $student->certificate = $request->certificate;
        $student->save();
        if ($student) {
            return redirect('DisplayData');
        } else {
            return"Form Not Submited";
        }
        
    }
    function getData()
    {
        $getStudents = User::paginate(5);
        return view('DisplayData',['students'=>$getStudents]);
    }
}
