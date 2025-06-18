<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GroupFee extends Model
{
    use HasFactory;

    protected $fillable = [
        'group',
        'amount',
    ];
}
