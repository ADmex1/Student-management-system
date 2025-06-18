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
    //Relations
    public function student():BelongsTo{
        return $this->BelongsTo(student::class);
    }
     public function GroupFee():BelongsTo{
        return $this->BelongsTo(GroupFee::class);
    }
     public function AcademicYear():BelongsTo{
        return $this->BelongsTo(AcademicYear::class);
    }
}
