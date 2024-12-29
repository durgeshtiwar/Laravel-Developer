<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;

class DBconnectionController extends Controller
{
    function DBconnection()
    {
        //$getStudents = DB::select('select * from students');
        $data = new \App\Models\Student;
        $data->dummy();
        $getStudents = \App\Models\Student::all();
        return view('Students',['getStudents'=>$getStudents]);
    }
}
