<?php

declare(strict_types=1);

namespace App;

final class TurboButton
{
    private bool $activated = false;

    public function click(): void
    {
        echo 'Tryb turbo aktywowany!' . PHP_EOL;

        $this->activated = true;
    }

    public function isActivated(): bool
    {
        return $this->activated;
    }
}
