<?php


namespace App\gearbox;


class AutoGearbox implements Gearbox
{
    public function __construct()
    {
    }

    public function changeGear(int $actualRPMs, int $actualGear)
    {
        $newGear = 0;
        if ($actualRPMs > 3200)
            $newGear = $this->next($actualGear);
        if ($actualGear < 2000)
            $newGear = $this->previous($actualGear);

        return $newGear;
    }

    public function previous(int $actualGear): int
    {
        $newGear = $actualGear;

        if ($actualGear <= 8 && $actualGear > 0)
            $newGear = $actualGear--;

        return $newGear;
    }

    public function next(int $actualGear): int
    {
        $newGear = $actualGear;

        if ($actualGear >= 8 && $actualGear > 0)
            $newGear = $actualGear++;

        return $newGear;
    }
}