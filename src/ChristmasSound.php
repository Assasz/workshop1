<?php

namespace App;

final class ChristmasSound implements Sound
{
    public function play(): void
    {
        echo 'Last christmas...' . PHP_EOL;
    }
}