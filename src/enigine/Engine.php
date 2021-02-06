<?php


namespace App\enigine;


use App\gearbox\RPM;

class Engine
{
    private $isTurnOn = false;
    private RPM $actualRpms;


    public function __construct()
    {
        $this->actualRpms = new RPM();
    }


    public static function turnOn()
    {
        $engine = new Engine();
        $engine->setRunStatus(true);

        return $engine;
    }

    public function drivingRpms()
    {
        $this->actualRpms->setActualRpms(RPM::setActualRpmsForRunningEngine());
    }

    public function turnOff()
    {
        if ($this->isRunning()) {
            $this->isTurnOn = false;
            $this->actualRpms->setActualRpms(RPM::engineOffRpms());
        } else
            return;
    }

    public function isRunning()
    {
        return $this->isTurnOn;
    }

    public function getActualRpms(): int
    {
        return $this->actualRpms->getActualRpmsAsNumber();
    }

    public function setRunStatus(bool $isTurnOn): void
    {
        $this->isTurnOn = $isTurnOn;
    }

    public function setActualRpms(RPM $actualRpms): void
    {
        $this->actualRpms = $actualRpms;
    }
}