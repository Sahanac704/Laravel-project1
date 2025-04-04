<?php

namespace App\Enum;

enum ColorEnum: string {
    case Black = 'Black';
    case White = 'White';
    case Red = 'Red';
    case Purple = 'Purple';
    case Yellow = 'Yellow';

    public function label(): string {
        return self::getLabel($this);
    }

    public static function getLabel(ColorEnum $value): string {
        return match($value) {
            self::Black => 'Black',
            self::White => 'White',
            self::Red => 'Red',
            self::Purple => 'Purple',
            self::Yellow => 'Yellow',
        };
    }
}
