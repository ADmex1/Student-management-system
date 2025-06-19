<?php
use App\Models\academicyear;

if(!function_exists('flashMessage')){
    function flashMessage($type = 'Success'):void
    {
        session()->flash('message',$message);
        session()->flash('type',$type);
    }
}
if(!function_exists('signatureMidtrans')){
    function signatureMidtrans($order_id, $status_code, $gross_ammount, $server_key):string
    {
        return hash('sha512', $order_id.$status_code.$gross_ammount.$server_key);
    }
}
if(!function_exists('ActiveStudent')){
    function ActiveStudent(){
        return academicyear::query()->where('active', true)->first();
    }
}
if(!function_exists('getLetterGrade')){
    function getLetterGrade($grade):string
    { 
        return match(true)
        {
            $grade >= 90 => 'A+',
            $grade == 90 => 'A',
            $grade >= 85 => 'A-',
            $grade >= 80 => 'B+',
            $grade == 80 => 'B',
            $grade >= 75 => 'B-',
            $grade >= 70 => 'C+',
            $grade == 70 => 'C',
            $grade >= 65 => 'C-',
            $grade >= 60 => 'D+',
            $grade == 60 => 'D',
            $grade >= 55 => 'D-',
            default => 'E',
        };
    }
}