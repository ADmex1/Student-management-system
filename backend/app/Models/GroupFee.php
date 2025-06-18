<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GroupFee extends Model
{
    protected $fillable =[
        'group',
        'amount',
    ];
}
