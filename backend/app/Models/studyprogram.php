<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class studyprogram extends Model
{
    protected $fillable = [
        'faculty_id',
        'majors_id',
        'academicyears_id',
        'name',
        'code',
        'slug',
    ];
    //Function to lowercase
    protected function code():Attribute{
        return Attribute::make(
            get:fn(string $value)=> strtoupper($value),
            set:fn(string $value)=>strtolower($value),
        );
    }
    //Relations
    public function faculty(): BelongsTo{
        return $this->BelongsTo(faculty::class);
    }
    public function major():BelongsTo{
        return $this->BelongsTo(major::class, 'majors_id');
    }
    public function students(): HasMany{
        return $this->HasMany(student::class);
    }
}
