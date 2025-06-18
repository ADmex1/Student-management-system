<?php
namespace App\enums;

enum Schedules:string {
    case MONDAY = 'Monday';
    case TUESDAY = 'Tuesday';
    case WEDNESDAY = 'Wednesday';
    case THURSDAY = 'Thursday';
    case FRIDAY = 'Friday';
    case SATURDAY = 'Saturday';
    case SUNDAY = 'Sunday';
    public static function option():array{
        return collect(self::case())->map(fn($item)=>[
            'value' => $item -> value,
            'label' => $item -> value
        ])->value()->toArray();
    }
}