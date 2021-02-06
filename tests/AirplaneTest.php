<?php


namespace App\Tests;


use App\enigine\Engine;
use App\vehicles\AirPlane;
use PHPUnit\Framework\TestCase;

/** @test */
class AirplaneTest extends TestCase
{
    //TODO before each method
    public function shouldGetEngineTurnedOn()
    {
        $plane = new AirPlane();
        $this->assertEquals(new Engine(), $plane->run());
    }

    public function shouldGetInformationAboutFly()
    {
        $plane = new AirPlane();
        $plane->run();
        $plane->enableFlyMode();
        $this->assertEquals("I'm flying", $plane->fly());
    }

    public function shouldEnableFlyModAndThenGetInfoAboutFly()
    {
        $plane = new AirPlane();
        $plane->run();
        $this->assertEquals("I'm flying", $plane->fly());
    }

    public function shouldEnableFlyModAndTurnOnEngineThenGetInfoAboutFly()
    {
        $plane = new AirPlane();
        $plane->run();
        $this->assertEquals("I'm flying", $plane->fly());
    }

    public function shouldEnableDriveMode()
    {
        $plane = new AirPlane();
        $plane->enableDriveMode();
        $this->assertEquals("DRIVE", $plane->getActualDriveState());

    }

    public function shouldEnableFlyMode()
    {
        $plane = new AirPlane();
        $plane->enableFlyMode();
        $this->assertEquals("FLY", $plane->getActualDriveState());

    }    public function shouldEnablePMode()
    {
        $plane = new AirPlane();
        $plane->enableParkingMode();
        $this->assertEquals("PARKING", $plane->getActualDriveState());

    }
}