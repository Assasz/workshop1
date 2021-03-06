<?php

use App\Beep;
use App\ChristmasSound;
use App\Elevator;
use App\EyeColor;
use App\Person;

require __DIR__ . '/vendor/autoload.php';

$elevator = new Elevator(
    new ChristmasSound(),
    new Beep(),
);

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

$elevator
    ->enter($kazmir, $assasz)
    ->selectFloor(2)
    ->run();