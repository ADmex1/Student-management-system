<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class major extends Model
{
    protected $fillable =[
        'faculty_id',
        'name',
        'code',
        'slug',
    ];
    protected function code():Attribute{
        return Attribute::make(
            get:fn(string $value) => strtoupper($value),
            set:fn(string $value)=>strtolower($value),
        );
    }
    public function faculty():BelongsTo{
        return $this-> BelongsTo(faculty::class);
    }
    public function studyprograms():HasMany{
        return $this->HasMany(studyprogram::class);
    }
}
