<?php

namespace App\Enums;

enum TableStatusEnum: string
{
    case FREE = 'free';
    case OCCUPIED = 'occupied';
    case RESERVED = 'reserved';

    public function label(): string
    {
        return match($this){
            self::FREE => 'Libre',
            self::OCCUPIED => 'Ocupado',
            self::RESERVED => 'Reservado',
        };
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
