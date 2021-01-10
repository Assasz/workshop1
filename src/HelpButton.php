<?php

declare(strict_types=1);

namespace App;

final class HelpButton
{
    private Janitor $janitor;

    public function __construct(Janitor $janitor)
    {
        $this->janitor = $janitor;
    }

    public function click(): void
    {
       $this->janitor->help();
    }
}
