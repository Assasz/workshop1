<?php

use App\Elevator;
use App\ChristmasSound;
use App\Beep;
use App\Person;

require __DIR__ . '/vendor/autoload.php';

$elevator = new Elevator(new ChristmasSound(), new Beep());
$kazmir = new Person('blue', 66);
$assasz = new Person('blue', 65);

echo $kazmir;
echo $assasz;

$elevator->enter($kazmir);
$elevator->enter($assasz);
$elevator->selectFloor(2);
$elevator->run();