<?php

namespace App\Enum;

enum QuantityEnum: string {
    case One = 'One';
    case Two = 'Two';
    case Three = 'Three';
    case Four = 'Four';
    case Five = 'Five';

    public function label(): string {
        return self::getLabel($this);
    }

    public static function getLabel(QuantityEnum $value): string {
        return match($value) {
            self::One => 'One',
            self::Two => 'Two',
            self::Three => 'Three',
            self::Four => 'Four',
            self::Five => 'Five',
        };
    }
}
