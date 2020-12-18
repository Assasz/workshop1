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

    private HelpButton $helpButton;
    private TurboButton $turboButton;

    private FloorCollection $floors;
    private ?Floor $selectedFloor = null;

    public function __construct(
        ChristmasSound $christmasSound,
        Beep $beep,
        HelpButton $helpButton,
        TurboButton $turboButton,
        FloorCollection $floors
    ) {
        $this->christmasSound = $christmasSound;
        $this->beep = $beep;
        $this->helpButton = $helpButton;
        $this->turboButton = $turboButton;
        $this->floors = $floors;
    }

    public function clickHelpButton(): self
    {
        $this->helpButton->click();

        return $this;
    }

    public function clickTurboButton(): self
    {
        $this->turboButton->click();

        return $this;
    }

    public function selectFloor(Floor $floor): self
    {
        if (!$this->floors->hasFloor($floor)) {
            throw ElevatorException::floorOutOfRange($floor);
        }

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

        try {
            echo "Winda rusza na piętro {$this->selectedFloor}!" . PHP_EOL;

            sleep($this->turboButton->isActivated() ? $this->selectedFloor->get() / 2 : $this->selectedFloor->get());

            echo 'Winda dotarła na miejsce!' . PHP_EOL;

            $this->beep->play();
        } catch (\Throwable $throwable) {
            $this->clickHelpButton();

            echo 'Awaryjne lądowanie' . PHP_EOL;
        }
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
