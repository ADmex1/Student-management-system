<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    protected $fillable = [
        'faculty_id',
        'majors_id',
        'studyprograms_id',
        'lecturer_id',
        'code',
        'name',
        'credit',
        'semester',
    ];
}
