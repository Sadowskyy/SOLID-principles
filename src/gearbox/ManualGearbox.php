<?php


namespace App\gearbox;


class ManualGearbox implements Gearbox
{
    public function __construct()
    {
    }

    public function changeGear(int $actualRPMs, int $actualGear)
    {
        return "Do it yourself";
    }

}