<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class schedule extends Model
{
    protected $fillable = [
        'faculty_id',
        'majors_id',
        'studyprograms_id',
        'course_id',
        'classroom_id',
        'academicyears_id',
        'class_start',
        'class_end',
        'schedule_day',
        'quota',
    ];
    protected function casts(): array{
        return [
            'schedule_day' => Schedules::class,
        ];
    }
}
