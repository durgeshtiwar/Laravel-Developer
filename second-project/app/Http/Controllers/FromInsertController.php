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
        $getStudents = Student::paginate(5);
        return view('DisplayData',['students'=>$getStudents]);
    }
    function deleteData($id)
    {
        $isDeleted = Student::destroy($id);
        if ($isDeleted) {
            return redirect('formData');
        } else {
            return"Data Not Deleted";
        }
    }
    function editData($id)
    {
        $student = Student::find($id);
        return view('Edit',['student'=>$student]);
    }
    function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->name = $request->name;
        $student->course = $request->course;
        $student->batch = $request->batch;
        $student->city = $request->city;
        $student->year = $request->year;
        $student->save();
        if ($student) {
            return redirect('formData');
        } else {
            return"Data Not Updated";
        }
    }
    function searchStudent(Request $request)
    {
        $student = Student::where('name','like',"%$request->search%")->get();
        return view('DisplayData',['students'=>$student,'search'=>$request->search]);
    }
    function multiDelete(Request $request)
    {
        $isDeleted = Student::destroy($request->ids);
        if ($isDeleted) {
            return redirect('formData');
        } else {
            return"Data Not Deleted";
        }
    }
}
