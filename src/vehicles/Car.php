<?php


namespace App\vehicles;


use App\drivestates\CarDriveStates;
use App\drivestates\DriveState;
use App\enigine\Engine;
use App\gearbox\AutoGearbox;
use App\gearbox\Gearbox;

class Car implements Vehicle, DrivingVehicle
{
    private Engine $engine;
    private DriveState $driveStates;
    private Gearbox $gearbox;
    private $actualDriveState;
    private $actualGear;

    public function __construct()
    {
        $this->driveStates = new CarDriveStates();
        $this->gearbox = new AutoGearbox();
        $this->actualGear = 1;
    }

    public function changeGear()
    {
        $this->actualGear = $this->gearbox->changeGear($this->engine->getActualRpms(), $this->actualGear);
        return $this->actualGear;
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


    public function getActualGear(): int
    {
        return $this->actualGear;
    }


    public function setActualGear(int $actualGear): void
    {
        $this->actualGear = $actualGear;
    }


}