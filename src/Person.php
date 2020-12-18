<?php

declare(strict_types=1);

namespace App;

final class Person implements HeavyObject
{
    private string $name;
    private EyeColor $eyeColor;
    private int $weight;

    public function __construct(
        string $name,
        EyeColor $eyeColor,
        int $weight
    ) {
        $this->name = $name;
        $this->eyeColor = $eyeColor;
        $this->weight = $weight;
    }

    public function getWeigh(): int
    {
        return $this->weight;
    }

    public function __toString(): string
    {
        return "Nazywam się {$this->name}, mam kolor oczu {$this->eyeColor} oraz wage {$this->weight}" . PHP_EOL;
    }
}
