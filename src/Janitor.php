<?php

declare(strict_types=1);

namespace App;

final class Janitor
{
    public function help(): void
    {
        echo 'Elo! Przyszedłem Wam pomóc! Naprawa windy zajmie 2 sekundy, chwilunia...' . PHP_EOL;

        sleep(2);
    }
}
