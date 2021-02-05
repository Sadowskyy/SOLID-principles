<?php


namespace App\enigine;


use App\gearbox\RPM;

class Engine
{
    private $isTurnOn;
    private RPM $actualRpms;


    public function __construct()
    {
        $this->actualRpms = new RPM();
    }


    public static function turnOn()
    {
        $engine = new Engine();
        $engine = $engine->setIsTurnOn(true);

        return new Engine();
    }

    public function turnOff()
    {
        $this->isTurnOn = false;
        $this->actualRpms->setActualRpms(RPM::engineOffRpms($this->actualRpms));
    }

    public function isRunning()
    {
        return $this->isTurnOn;
    }

    public function getActualRpms(): RPM
    {
        return $this->actualRpms;
    }

    public function setIsTurnOn(bool $isTurnOn): void
    {
        $this->isTurnOn = $isTurnOn;
    }
}