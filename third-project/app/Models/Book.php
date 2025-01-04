<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $timestamps = false;
    public function studentBlongs()
    {
        return $this->belongsTo('App\Models\Student','user_id');
    }
}
