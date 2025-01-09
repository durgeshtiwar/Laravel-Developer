<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
