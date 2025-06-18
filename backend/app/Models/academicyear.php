<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class academicyear extends Model
{
    protected $fillable =[
        'name',
        'slug',
        'start_date',
        'end_date',
        'semester',
        'active',

    ];
    //Calling the Enum
    protected function casts():array{
        return[
            'semester' => AcademicYear::class,
        ];
    }
}
