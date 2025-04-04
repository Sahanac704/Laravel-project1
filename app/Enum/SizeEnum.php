<?php

namespace App\Enum;

enum SizeEnum: string {
    case Small = 'Small';
    case Medium = 'Medium';
    case Large = 'Large';
    case ExtraLarge = 'Extra Large';

    public function label(): string {
        return self::getLabel($this);
    }

    public static function getLabel(SizeEnum $value): string {
        return match($value) {
            self::Small => 'Small',
            self::Medium => 'Medium',
            self::Large => 'Large',
            self::ExtraLarge => 'Extra Large',
        };
    }
}
