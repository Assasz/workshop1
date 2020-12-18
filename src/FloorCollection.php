<?php

declare(strict_types=1);

namespace App;

final class FloorCollection
{
    /** @var Floor[] */
    private array $floors;

    public static function create(int $numberOfFloors): self
    {
        if ($numberOfFloors < 1) {
            throw new \InvalidArgumentException('Liczba pięter nie może być mniejsza niż 1');
        }

        foreach (range(0, $numberOfFloors) as $value) {
            $floors[] = new Floor($value);
        }

        return new self(...$floors ?? []);
    }

    public function hasFloor(Floor $floor): bool
    {
        return in_array($floor, $this->floors);
    }

    private function __construct(Floor ...$floors)
    {
        $this->floors = $floors;
    }
}
