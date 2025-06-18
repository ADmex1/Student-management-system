<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class paymentfee extends Model
{
    protected $fillable= [
        'payment_code',
        'student_id',
        'group_fee_id',
        'academicyears_id',
        'semester',
        'status'
    ];
    public function student():BelongsTo{
        return $this->BelongsTo(student::class);
    }
}
