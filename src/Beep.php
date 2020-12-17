<?php

namespace App;

final class Beep implements Sound
{
    public function play(): void
    {
        echo 'Beep!' . PHP_EOL;
    }
}