<?php


namespace App\Tests;


use App\enigine\Engine;
use App\gearbox\RPM;
use App\vehicles\Car;
use PHPUnit\Framework\TestCase;

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

    public function shouldTurnOffRunningEngine()
    {
        $car = new Car();
        $car->run();
        $car->turnOff();

        $this->assertEquals(0, $car->getEngine()->getActualRpms());
    }

    public function shouldChangeGearToNext()
    {
        $car = new Car();
        $currentRpm = new RPM();
        $currentRpm->setActualRpms(4200);

        $car->run();
        $car->getEngine()->setActualRpms($currentRpm);

        $this->assertEquals(2, $car->changeGear());
    }

    public function shouldDontChangeGear()
    {
        $car = new Car();
        $currentRpm = new RPM();
        $currentRpm->setActualRpms(1600);

        $car->run();
        $car->getEngine()->setActualRpms($currentRpm);

        $this->assertEquals(1, $car->changeGear());
    }

    public function shouldChangeGearToPrevious()
    {
        $car = new Car();
        $currentRpm = new RPM();
        $currentRpm->setActualRpms(1600);

        $car->run();
        $car->setActualGear(2);
        $car->getEngine()->setActualRpms($currentRpm);

        $this->assertEquals(1, $car->changeGear());
    }
}