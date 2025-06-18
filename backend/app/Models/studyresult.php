<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class studyresult extends Model
{
    protected $fillable =[
        'student_id',
        'academicyears_id',
        'semester',
        'gps',
        'gpa',
    ];
    public function student():BelongsTo{
        return $this->BelongsTo(student::class);
    }
    public function academicyear():BelongsTo{
        return $this->BelongsTo(academicyear::class);
    }
    public function grades():HasMany{
        return $this->HasMany(studyresultgrade::class);
    }
}
