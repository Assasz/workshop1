<?php

namespace App;

class Animal implements HeavyObject
{
    private int $weight;

    public function __construct(int $weight)
    {
        $this->weight = $weight;
    }

    public function getWeigh(): int
    {
        return $this->weight;
    }
}