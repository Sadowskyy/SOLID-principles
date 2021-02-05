<?php


namespace App\vehicles;


use App\drivestates\CarDriveStates;
use App\enigine\Engine;
use App\gearbox\AutoGearbox;
use App\gearbox\Gearbox;
use App\gearbox\RPM;
use phpDocumentor\Reflection\Types\This;

class Car implements Vehicle, DrivingVehicle
{
    private Engine $engine;
    private $driveStates;
    private $gearbox;
    private $actualDriveState;
    private $actualGear;

    public function __construct()
    {
        $this->driveStates = new CarDriveStates();
        $this->gearbox = new AutoGearbox();
    }

    public function changeGear()
    {
        $this->actualGear = $this->gearbox->changeGear($this->engine->getActualRpms(), $this->actualGear);
    }

    public function run()
    {
        $this->engine = Engine::turnOn();
        $this->enableNeutralMode();

        return $this->engine;
    }

    public function turnOff()
    {
        $this->engine->turnOff();
        $this->enableParkingMode();
    }

    public function enableParkingMode()
    {
        $this->actualDriveState = $this->driveStates->getDriveStates()[0];
    }

    public function enableNeutralMode()
    {
        $this->actualDriveState = $this->driveStates->getDriveStates()[1];
    }

    public function enableDriveMode()
    {
        $this->actualDriveState = $this->driveStates->getDriveStates()[2];
    }

    public function enableReverseMode()
    {
        $this->actualDriveState = $this->driveStates->getDriveStates()[3];
    }

    public function getActualDriveState()
    {
        return $this->actualDriveState;
    }


    public function drive()
    {
        if ($this->engine == null || !$this->engine->isRunning())
            $this->run();

        if (!$this->actualDriveState == "DRIVE")
            $this->enableDriveMode();

        $this->engine->drivingRpms();
        return "I'm driving";
    }

    public function getEngine(): Engine
    {
        return $this->engine;
    }

}