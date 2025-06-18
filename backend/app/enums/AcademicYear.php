<?php
namespace App\enums;

enum AcademicYear: string{
    case ODD = 'Odd';
    case EVEN = 'Even';

    public static function option():array{
        return collect(self::cases())->map(fn($item)=>[
            'value' => $item->value,
            'label' => $item->value,
        ])->value()->toArray(); 
    }
}