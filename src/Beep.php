<?php

declare(strict_types=1);

namespace App;

final class Beep
{
    public function play(): void
    {
        echo 'Beep!' . PHP_EOL;
    }
}
