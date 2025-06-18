<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class studyresultgrade extends Model
{
    protected $fillable = [
        'studyresult_id',
        'course_id',
        'grade_letter',
        'weight_value',
        'grade'
    ];
    public function StudyResult():BelongsTo{
        return $this->BelongsTo(studyresult::class);
    }
    public function course():BelongsTo{
        return $this->BelongsTo(course::class);
    }
}
