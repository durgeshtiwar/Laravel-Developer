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
