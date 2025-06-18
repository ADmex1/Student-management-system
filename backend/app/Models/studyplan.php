<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class studyplan extends Model
{
    protected $fillable = [
        'student_id',
        'academicyears_id',
        'status',
        'notes',
    ];
    //Calling the Enum
    protected function casts(): array{
        return [
            'status' => KRS::class,
        ];
    }
    //Relations
    public function student():BelongsTo{
        return $this->BelongsTo(student::class);
    }
    public function academicyear():BelongsTo{
        return $this->BelongsTo(academicyear::class);
    }
    public function schedules():BelongsToMany{
        return $this->BelongsToMany(schedule::class, 'studyplan_schedule')->withTimeStamps();
    }
}
