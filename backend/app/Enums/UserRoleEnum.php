<?php

namespace App\Enums;

enum UserRoleEnum: string
{
    case ADMIN = 'admin';
    case CASHIER = 'cashier';
    case WAITER = 'waiter';
    case COOK = 'cook';
    case BARTENDER = 'bartender';
    case BARISTA = 'bartista';
    case STOCK_MANAGER = 'stock_manager';
    case CUSTOMER = 'customer';

    public function label(): string
    {
        return match($this){
            self::ADMIN => 'Administrador',
            self::CASHIER => 'cajero',
            self::WAITER => 'mesero',
            self::COOK => 'cosicnero',
            self::BARTENDER => 'bartender',
            self::BARISTA => 'barista',
            self::STOCK_MANAGER => 'Almacenero',
            self::CUSTOMER => 'Cliente',
        };
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
