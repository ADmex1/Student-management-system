<?php

namespace App\enums;

enum KRS : string{
    case PENDING = 'Pending';
    case APPROVED = 'Approved';
    case REJECTED = 'Rejected';

    public static function option():array{
        return collect(self::cases())->map(fn($item)=>[
            'value' => $item->value,
            'label' => $item->value
        ])->value()->toArray();
    }
}