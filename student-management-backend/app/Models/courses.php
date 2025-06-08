<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    protected $table = 'courses';
    protected $fillable = [
        'code',
        'semester',
        'name',
        'credits',
        'description',
        'studyprogram_id',
        'faculty_id',
    ];
}
