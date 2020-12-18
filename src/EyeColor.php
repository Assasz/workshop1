<?php

declare(strict_types=1);

namespace App;

final class EyeColor
{
    private string $value;

    private const COLOR_BLUE = 'blue';
    private const COLOR_GREEN = 'green';
    private const COLOR_BROWN = 'brown';

    public static function blue(): self
    {
        return new self(self::COLOR_BLUE);
    }

    public static function green(): self
    {
        return new self(self::COLOR_GREEN);
    }

    public static function brown(): self
    {
        return new self(self::COLOR_BROWN);
    }

    public function __toString(): string
    {
        return $this->value;
    }

    private function __construct(string $value)
    {
        $this->value = $value;
    }
}
