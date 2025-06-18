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
    //Relations
    public function faculty(): BelongsTo{
        return $this->BelongsTo(faculty::class);
    }
    public function major(): BelongsTo{
        return $this->BelongsTo(major::class);
    }
    public function studyprogram(): BelongsTo{
        return $this->BelongsTo(StudyProgram::class);
    }
    public function academicyear(): BelongsTo{
        return $this->BelongsTo(AcademicYear::class);
    }
    public function students(): HasMany{
        return $this->HasMany(Student::class);
    }
    public function schedules(): HasMany{
        return $this->HasMany(schedule::class);
    }
    //calling a relation from different relation
    public function courses(): HasManyThrough{
        return $this->HasManyThrough(

            course::class,
            schedule::class,
            'classroom_id',
            'id',
            'id',
            'course_id',

        );

    }
}
