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
    public function faculty():BelongsTo{
        return $this->BelongsTo(faculty::class);
    }
       public function major():BelongsTo{
        return $this->BelongsTo(major::class);
    }
       public function studyprogram():BelongsTo{
        return $this->BelongsTo(studyprogram::class);
    }
       public function course():BelongsTo{
        return $this->BelongsTo(course::class);
    }
      public function classroom():BelongsTo{
        return $this->BelongsTo(classroom::class);
    }
       public function academicyear():BelongsTo{
        return $this->BelongsTo(academicyear::class);
    }
       public function studyPlans():BelongsToMany{
        return $this->BelongsTo(studyplan::class, 'studyplant_schedule'->withTimeStamps());
    }
}
