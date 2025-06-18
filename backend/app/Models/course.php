<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    protected $fillable = [
        'faculty_id',
        'majors_id',
        'studyprograms_id',
        'lecturer_id',
        'academicyears_id',
        'code',
        'name',
        'credit',
        'semester',
    ];
    public function faculty():BelongsTo{
        return $this->BelongsTo(faculty::class);
    }
    public function major():BelongsTo{
        return $this->BelongsTo(major::class);
    }
    public function  studyprogram():BelongsTo{
        return $this->BelongsTo(studyprogram::class);
    }
    public function academicyear():BelongsTo{
        return $this->BelongsTo(academicyear::class);
    }
    public function schedules(): HasMany{
        return $this->HasMany(schedules::class);
    }
    public function attendances(): HasMany{
        return $this->HasMany(attendances::class);
    }
    public function grades(): HasMany{
        return $this->HasMany(grades::class);
    }
}
