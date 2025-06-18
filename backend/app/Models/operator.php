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
}
