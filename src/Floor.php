<?php

declare(strict_types=1);

namespace App;

final class Floor
{
    private int $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    public function __toString(): string
    {
        return (string) $this->value;
    }

    public function get(): int
    {
        return $this->value;
    }
}
