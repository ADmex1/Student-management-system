<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';

    protected $fillable = [
        'NIM',
        'name',
        'email',
        'phone',
        'place_of_origin',
        'address',
        'date_of_birth',
        'highschool',
        'studyprogram_id',
        'faculty_id',
    ];

    public function studyProgram()
    {
        return $this->belongsTo(StudyProgram::class, 'studyprogram_id');
    }

    public function faculty()
    {
        return $this->belongsTo(Faculty::class, 'faculty_id');
    }
}
