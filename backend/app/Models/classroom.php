<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class classroom extends Model
{
    protected $fillable = [
        'faculty_id',
        'majors_id',
        'studyprograms_id',
        'academicyears_id',
        'name',
        'slug'
    ];
}
