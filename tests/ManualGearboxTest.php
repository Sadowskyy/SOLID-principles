<?php


namespace App\Tests;


use App\gearbox\ManualGearbox;
use PHPUnit\Framework\TestCase;

class ManualGearboxTest extends TestCase
{
    public function changeGearToPrevious()
    {
        $gearbox = new ManualGearbox();
        $this->assertEquals("Do it yourself", $gearbox->changeGear((int)self::any(), (int)self::any()));
    }

    public function changeGearToNext()
    {
        $gearbox = new ManualGearbox();
        $this->assertEquals("Do it yourself", $gearbox->changeGear((int)self::any(), (int)self::any()));
    }
}