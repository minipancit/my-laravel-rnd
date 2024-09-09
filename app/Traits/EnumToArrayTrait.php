<?php

namespace App\Trait;

trait EnumToArrayTrait
{
    public static function toArray(): array
    {
        $result = [];
        
        foreach (self::cases() as $case) {
            $result[] = [
                'name' => $case->name,
                'value' => $case->value
            ];
        }
        
        return $result;
    }
}
