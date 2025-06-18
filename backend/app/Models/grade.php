<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class grade extends Model
{
    protected $fillable = [
        'course_id',
        'student_id',
        'classroom_id',
        'grade',
        'meetings',
        'grade_type'
    ];
    //Relations
    public function course():BelongsTo{
        return $this->BelongsTo(course::class);
    }
        public function student():BelongsTo{
        return $this->BelongsTo(student::class);
    }
        public function classroom():BelongsTo{
        return $this->BelongsTo(classroom::class);
    }
}
