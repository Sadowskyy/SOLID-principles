<?php


namespace App\gearbox;


interface Gearbox
{
    public function changeGear(int $actualRPMs, int $actualGear);
}