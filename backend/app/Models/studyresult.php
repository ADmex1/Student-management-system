<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class studyresult extends Model
{
    protected $fillable =[
        'student_id',
        'academicyears_id',
        'semester',
        'gps',
        'gpa',
    ];
}
