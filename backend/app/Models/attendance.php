<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class attendance extends Model
{
    protected $fillable = [
        'course_id',
        'student_id',
        'classroom_id',
        'status',
        'meetings'
    ];
}
