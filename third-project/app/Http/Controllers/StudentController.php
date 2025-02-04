<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Student;
use App\Models\Book;

class StudentController extends Controller
{
    //get api function
    function getAllStudentApi()
    {
        $students = Student::all();
        return $students;
    }

    //post api function
    function addStudentApi(Request $request)
    {
        $rules = [
            'name' => 'required|min:2|max:20',
            'course' => 'required',
            'batch' => 'required',
            'city' => 'required',
        ];
        $validation = Validator::make($request->all(), $rules);
        if ($validation->fails()) {
            return $validation->errors();
        } else {
            $student = New Student();
            $student->name = $request->name;
            $student->course = $request->course;
            $student->batch = $request->batch;
            $student->city = $request->city;
            $student->year = $request->year;
            if ($student->save()) {
                return"Student Added";
            } else {
                return"Operation Failed";
            }
        }
    }

    //put api function
    function updateStudentApi(Request $request)
    {
        $student = Student::find($request->id);
        $student->name = $request->name;
        $student->course = $request->course;
        $student->batch = $request->batch;
        $student->city = $request->city;
        $student->year = $request->year;
        if ($student->save()) {
            return"Student Updated";
        } else {
            return"Operation Failed";
        }
    }

    // delete api function
    function deleteStudentApi($id)
    {
        $student = Student::destroy($id);
        if ($student) {
            return"Student Deleted";
        } else {
            return"Operation Failed";
        }
        
    }
    // search api function
    function searchStudentApi($name)
    {
        $student = Student::where('name','like',"%$name%")->get();
        if ($student) {
            return $student;
        } else {
            return"No Record Found";
        }
    }


    // function getStudent()
    // {
    //     $students = Student::find(2)->studentBook;
    //     return $students;
    // }
    // function getOneToMany()
    // {
    //     $students = Student::find(1)->manyStudentBook;
    //     return $students;
    // }
    // function getManyToOne()
    // {
    //     $books = Book::with('studentBlongs')->get();
    //     return $books;
    // }
}
