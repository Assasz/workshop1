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

    public static function floorOutOfRange(Floor $floor): self
    {
        return new self(
            "Wybrane piętro {$floor} jest nieprawidłowe!"
        );
    }
}
