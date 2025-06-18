<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class lecturer extends Model
{
    protected $fillable = [
        'user_id',
        'faculty_id',
        'majors_id',
        'studyprograms_id',
        'NID',
        'academic_title'
    ];
}
