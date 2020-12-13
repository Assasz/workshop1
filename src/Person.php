<?php

namespace App;

final class Person implements HeavyObject
{
    private string $eyeColor;
    private int $weight;

    public function __construct(string $eyeColor, int $weight)
    {
        if (!EyeColor::hasColor($eyeColor)) {
            throw new \InvalidArgumentException('Podany nieprawidłowy kolor oczu.');
        }

        $this->eyeColor = $eyeColor;
        $this->weight = $weight;
    }

    public function getWeigh(): int
    {
        return $this->weight;
    }

    public function getEyeColor(): string
    {
        return $this->eyeColor;
    }

    public function __toString(): string
    {
        return "Mam kolor oczu {$this->eyeColor} oraz wage {$this->weight}" . PHP_EOL;
    }
}
