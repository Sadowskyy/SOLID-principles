<?php


namespace App\Tests;


use App\gearbox\AutoGearbox;
use PHPUnit\Framework\TestCase;

class AutoGearboxTest extends TestCase
{
    public function changeGearToPrevious()
    {
        $gearbox = new AutoGearbox();
        $this->assertEquals(3, $gearbox->changeGear(1700, 4));
    }

    public function changeGearToNext()
    {
        $gearbox = new AutoGearbox();
        $this->assertEquals(1, $gearbox->changeGear(4500, 2));
    }
}