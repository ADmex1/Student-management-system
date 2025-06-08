<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudyProgram extends Model
{
    protected $table = 'studyprograms';

    protected $fillable = [
        'code',
        'name',
        'description',
        'email',
        'website',
        'faculty_id',
    ];
}
