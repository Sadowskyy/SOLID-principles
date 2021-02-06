<?php


namespace App\vehicles;


use App\drivestates\CarDriveStates;
use App\drivestates\DriveState;
use App\enigine\Engine;
use App\gearbox\AutoGearbox;
use App\gearbox\Gearbox;
use App\gearbox\ManualGearbox;

class ManualGearboxCar implements Vehicle, DrivingVehicle
{
    private Engine $engine;
    private Gearbox $gearbox;
    private $actualDriveState;
    private $actualGear;

    public function __construct()
    {
        $this->gearbox = new ManualGearbox();
    }

    public function changeGear()
    {
        $this->actualGear = $this->gearbox->changeGear($this->engine->getActualRpms(), $this->actualGear);
    }

    public function run()
    {
        $this->engine = Engine::turnOn();

        return $this->engine;
    }

    public function turnOff()
    {
        $this->engine->turnOff();
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