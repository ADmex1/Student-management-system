<?php

namespace App\enums;

enum PaymentStatus : string{
    case PENDING = 'Pending';
    case SUCCESS = 'Success';
    case FAILED = 'Failed';
    public static function option(): array{
        return collect(self::cases())->map(fn($item)=>[
            'value' => $item -> value,
            'label' => $item -> value
        ])->value()->toArray();
    }
}