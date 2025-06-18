<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class faculty extends Model
{
    protected $fillable=[
        'name',
        'code',
        'logo',
        'slug',
    ];

    protected function code():Attribute{
        //Transform the letters of the Code to uppercase letter, but kept it lowercase on database
        return Attribute::make(
            //Accessor
            get:fn(string $value) => strtoupper($value),
            //Mutator
            set:fn(string $value) => strtolower($value),
        );
    }
}
