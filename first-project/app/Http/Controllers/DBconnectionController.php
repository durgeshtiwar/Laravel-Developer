<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\facades\DB;

class DBconnectionController extends Controller
{
    function DBconnection()
    {
        //$getStudents = DB::select('select * from students');
        // $data = new \App\Models\Student;
        // $data->dummy();

        // Eloquent Model Query builder
        // Student::insert([
        //     'name'=>'Aditya Tiwari',
        //     'course'=>'BCA',
        //     'batch'=>'Evening',
        //     'city'=>'Sultanpur',
        //     'year'=>'3rd',
        // ]);
        $getStudents = Student::all();
        return view('Students',['getStudents'=>$getStudents]);

        //Query Builder
        //$getStudents = DB::table('students')->get();
        //return view('Students',['getStudents'=>$getStudents]);
    }
}
