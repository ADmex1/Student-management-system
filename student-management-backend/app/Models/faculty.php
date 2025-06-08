<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class faculty extends Model
{
    protected $table = 'faculty';

    protected $fillable = [
        'name',
        'description',
        'email',
    ];
}
