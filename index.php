<?php

use App\Beep;
use App\ChristmasSound;
use App\Elevator;
use App\EyeColor;
use App\Person;

require __DIR__ . '/vendor/autoload.php';

$elevator = new Elevator(new ChristmasSound(), new Beep());
$kazmir = new Person(EyeColor::COLOR_BLUE, 66);
$assasz = new Person(EyeColor::COLOR_GREEN, 65);

echo $kazmir;
echo $assasz;

$elevator->enter($kazmir);
$elevator->enter($assasz);
$elevator->selectFloor(2);
$elevator->run();