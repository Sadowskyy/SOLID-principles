<?php


namespace App\vehicles;


use App\drivestates\AirplaneDriveStates;
use App\drivestates\DriveState;
use App\enigine\Engine;

class AirPlane implements FlyingVehicle, Vehicle
{
    private Engine $engine;
    private DriveState $driveStates;

    private $actualDriveState;

    public function __construct()
    {
        $this->driveStates = new AirplaneDriveStates();
    }

    /**
     * @return mixed
     */
    public function getActualDriveState()
    {
        return $this->actualDriveState;
    }

    public function enableParkingMode()
    {
        $this->actualDriveState = $this->driveStates->getDriveStates()[0];
    }

    public function enableDriveMode()
    {
        $this->actualDriveState = $this->driveStates->getDriveStates()[1];
    }

    public function enableFlyMode()
    {
        $this->actualDriveState = $this->driveStates->getDriveStates()[2];
    }


    public function fly()
    {
        if ($this->engine == null)
            $this->run();

        if (!$this->actualDriveState == "FLY")
            $this->enableFlyMode();

        return "I'm flying";
    }

    public function run()
    {
        $engine = new Engine();
        $engine->turnOn();
        $this->enableParkingMode();
        $this->engine = $engine;

        return $engine;
    }
}