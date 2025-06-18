<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $fillable =[
        'user_id',
        'faculty_id',
        'majors_id',
        'studyprograms_id',
        'classroom_id',
        'group_fee_id',
        'NIM',
        'semester',
        'batch',
    ];
    //Relations
    public function user():BelongsTo{
        return $this->BelongsTo(user::class);
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
      public function classroom():BelongsTo{
        return $this->BelongsTo(classroom::class);
    }
      public function groupfee():BelongsTo{
        return $this->BelongsTo(GroupFee::class);
    }
      public function attendances():HasMany{
        return $this->HasMany(attendance::class);
    }
      public function grades():HasMany{
        return $this->HasMany(grade::class);
    }
      public function studyPlans():HasMany{
        return $this->HasMany(studyplan::class);
    }
    public function studyResults():HasMany{
        return $this->HasMany(studyresult::class);
    }
}
