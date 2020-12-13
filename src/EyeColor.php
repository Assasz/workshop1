<?php

namespace App;

class EyeColor
{
    /**
     * @var string[]
     */
    private const COLORS = [
        'blue' => self::COLOR_BLUE,
        'green' => self::COLOR_GREEN,
        'brown' => self::COLOR_BROWN,
    ];

    public const COLOR_BLUE = 'blue';
    public const COLOR_GREEN = 'green';
    public const COLOR_BROWN = 'brown';

    public static function hasColor(string $color): bool
    {
        return array_key_exists($color, self::COLORS);
    }
}