<?php


namespace App\Tests;


use App\enigine\Engine;
use App\vehicles\Car;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Routing\Annotation\Route;

/** @test */
class CarTest extends TestCase
{
    public function shouldGetEngineTurnedOn()
    {
        $car = new Car();
        $this->assertEquals(new Engine(), $car->run());
    }

    public function shouldGetInfoAboutDrive()
    {
        $car = new Car();
        $car->run();
        $car->enableDriveMode();
        $this->assertEquals("I'm driving", $car->drive());
    }

    public function shouldChangeStateToDriveAndGetInfo()
    {
        $car = new Car();
        $car->run();
        $this->assertEquals("I'm driving", $car->drive());
    }

    public function shouldTurnEngineOnAndChangeStateToDrive()
    {
        $car = new Car();
        $car->run();
        $this->assertEquals("I'm driving", $car->drive());
    }

    public function shouldEnableDriveMode()
    {
        $car = new Car();
        $car->enableDriveMode();

        $this->assertEquals("DRIVE", $car->getActualDriveState());
    }

    public function shouldEnableReverseMode()
    {
        $car = new Car();
        $car->enableReverseMode();

        $this->assertEquals("REVERSE", $car->getActualDriveState());
    }

    public function shouldEnableNeutralMode()
    {
        $car = new Car();
        $car->enableNeutralMode();

        $this->assertEquals("NEUTRAL", $car->getActualDriveState());
    }

    public function shouldEnableParkingMode()
    {
        $car = new Car();
        $car->enableParkingMode();

        $this->assertEquals("PARKING", $car->getActualDriveState());
    }
}