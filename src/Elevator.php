<?php

namespace App;

class Elevator
{
    private const WEIGHT_LIMIT = 500;

    /** @var HeavyObject[] */
    private array $objects;

    private int $weightTotal = 0;

    private ChristmasSound $christmasSound;
    private Beep $beep;

    private ?int $selectedFloor = null;

    public function __construct(ChristmasSound $christmasSound, Beep $beep)
    {
        $this->christmasSound = $christmasSound;
        $this->beep = $beep;
    }

    public function selectFloor(int $floor): void
    {
        $this->selectedFloor = $floor;
    }

    public function enter(HeavyObject $object): void
    {
        echo 'Otwarto drzwi' . PHP_EOL;

        $this->weightTotal += $object->getWeigh();

        $this->christmasSound->play();
    }

    public function run(): void
    {
        if ($this->weightTotal > self::WEIGHT_LIMIT) {
            throw ElevatorException::overweighted();
        }

        if ($this->selectedFloor === null) {
            throw ElevatorException::floorNotSelected();
        }

        echo "Winda rusza na piętro {$this->selectedFloor}!" . PHP_EOL;

        sleep(3);

        echo 'Winda dotarła na miejsce!' . PHP_EOL;

        $this->beep->play();
    }
}