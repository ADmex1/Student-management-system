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
}
