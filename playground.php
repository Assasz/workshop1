<?php

use App\Beep;
use App\ChristmasSound;
use App\Elevator;
use App\EyeColor;
use App\Person;
use App\HelpButton;
use App\TurboButton;
use App\Floor;
use App\FloorCollection;

require __DIR__ . '/vendor/autoload.php';

$kazmir = new Person(
    'Kazmir',
    EyeColor::blue(),
    66,
);
$assasz = new Person(
    'Assasz',
    EyeColor::green(),
    65,
);

echo $kazmir;
echo $assasz;

$elevator = new Elevator(
    new ChristmasSound(),
    new Beep(),
    new HelpButton(),
    new TurboButton(),
    FloorCollection::create(10),
);

$elevator
    ->enter($kazmir, $assasz)
    ->selectFloor(new Floor(4))
    ->clickTurboButton()
    ->clickHelpButton()
    ->run();
