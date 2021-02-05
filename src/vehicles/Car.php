<?php


namespace App\vehicles;


use App\drivestates\CarDriveStates;
use App\enigine\Engine;

class Car implements Vehicle, DrivingVehicle
{
    private Engine $engine;
    private $driveStates;


    private $actualDriveState;


    public function __construct()
    {
        $this->driveStates = new CarDriveStates();
    }

    public function run()
    {
        $engine = new Engine();
        $engine->turnOn();
        $this->enableNeutralMode();
        $this->engine = $engine;

        return $engine;
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
        if ($this->engine == null)
            $this->run();

        if (!$this->actualDriveState == "DRIVE")
            $this->enableDriveMode();

        return "I'm driving";
    }
}