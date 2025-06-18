<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class lecturer extends Model
{
    protected $fillable = [
        'user_id',
        'faculty_id',
        'majors_id',
        'studyprograms_id',
        'NID',
        'academic_title'
    ];
    //calling the enum
    public function user():BelongsTo{
        return $this->BelongsTo(user::class);
    }
      public function faculty():BelongsTo{
        return $this->BelongsTo(faculty::class);
    }
      public function major():BelongsTo{
        return $this->BelongsTo(major::class);
    }
      public function StudyProgram():BelongsTo{
        return $this->BelongsTo(studyprogram::class);
    }
}
