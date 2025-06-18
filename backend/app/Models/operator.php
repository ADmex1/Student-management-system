<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class operator extends Model
{
    protected $fillable = [
        'user_id',
        'faculty_id',
        'majors_id',
        'employee_number',
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
}
