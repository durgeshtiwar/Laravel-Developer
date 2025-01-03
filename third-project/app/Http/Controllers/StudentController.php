<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Book;

class StudentController extends Controller
{
    function getStudent()
    {
        $students = Student::find(2)->studentBook;
        return $students;
    }
}
