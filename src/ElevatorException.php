<?php

namespace App;

final class ElevatorException extends \RuntimeException
{
    public static function overweighted(): self
    {
        return new self(
            'Winda jest przepełniona'
        );
    }

    public static function floorNotSelected(): self
    {
        return new self(
            'Nie wybrano piętra!'
        );
    }
}