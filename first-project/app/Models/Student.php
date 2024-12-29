<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    function dummy()
    {
        echo"<h1>THis is a dummy function in model.</h1>";
    }
}
