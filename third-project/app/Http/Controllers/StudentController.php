<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Book;

class StudentController extends Controller
{
    function getAllStudentApi()
    {
        $students = Student::all();
        return $students;
    }
    function getStudent()
    {
        $students = Student::find(2)->studentBook;
        return $students;
    }
    function getOneToMany()
    {
        $students = Student::find(1)->manyStudentBook;
        return $students;
    }
    function getManyToOne()
    {
        $books = Book::with('studentBlongs')->get();
        return $books;
    }
}
