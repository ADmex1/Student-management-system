<?php

namespace App\enums;

enum MessageType: string{
    case CREATED = 'Added';
    case UPDATED = 'Upaded';
    case DELETED = 'Deleted';
    case ERROR = 'ERR Try Again';

    public function message(string $entity = '', string $error = null): string{
        if($this == MessageType::ERROR && $error){
            return "{$this->value} {$error}";
        }
        return "{$this->value} {$entity}";
    }
}