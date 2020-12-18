<?php

declare(strict_types=1);

namespace App;

final class HelpButton
{
    public function click(): void
    {
        (new Janitor())->help();
    }
}
