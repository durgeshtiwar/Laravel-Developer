<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $timestamps = false;
    function studentBook()
    {
        return $this->hasOne('App\Models\Book','user_id');
    }
}
