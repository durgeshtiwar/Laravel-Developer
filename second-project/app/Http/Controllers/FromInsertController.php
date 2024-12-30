<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class FromInsertController extends Controller
{
    function submit(Request $request)
    {
        $student = new Student();
        $student->name = $request->name;
        $student->course = $request->course;
        $student->batch = $request->batch;
        $student->city = $request->city;
        $student->year = $request->year;
        $student->save();
        if ($student) {
            return redirect('formData');
        } else {
            return"Form Not Submited";
        }
        
    }
    function getData()
    {
        $getStudents = Student::all();
        return view('DisplayData',['students'=>$getStudents]);

    }
}