<?php

declare(strict_types=1);

namespace App;

final class Elevator
{
    private const WEIGHT_LIMIT = 500;

    /** @var HeavyObject[] */
    private array $objects;

    private ChristmasSound $christmasSound;
    private Beep $beep;

    private ?int $selectedFloor = null;

    public function __construct(ChristmasSound $christmasSound, Beep $beep)
    {
        $this->christmasSound = $christmasSound;
        $this->beep = $beep;
    }

    public function selectFloor(int $floor): self
    {
        $this->selectedFloor = $floor;

        return $this;
    }

    public function enter(HeavyObject ...$objects): self
    {
        echo 'Otwarto drzwi' . PHP_EOL;

        foreach ($objects as $object) {
            $this->objects[] = $object;
        }

        $this->christmasSound->play();

        return $this;
    }

    public function run(): void
    {
        if ($this->getWeightTotal() > self::WEIGHT_LIMIT) {
            throw ElevatorException::overweighted();
        }

        if ($this->selectedFloor === null) {
            throw ElevatorException::floorNotSelected();
        }

        echo "Winda rusza na piętro {$this->selectedFloor}!" . PHP_EOL;

        sleep($this->selectedFloor);

        echo 'Winda dotarła na miejsce!' . PHP_EOL;

        $this->beep->play();
    }

    private function getWeightTotal(): int
    {
        return array_reduce(
            $this->objects,
            static fn(int $weightTotal, HeavyObject $object): int => $weightTotal += $object->getWeigh(),
            0,
        );
    }
}
