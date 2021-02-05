<?php


namespace App\gearbox;


class RPM
{
    private $actualRpms;


    public function __construct()
    {
        $this->actualRpms = 1000;
    }

    public static function setActualRpmsForRunningEngine(): int
    {
        return rand(1200, 6700);
    }

    public static function engineOffRpms()
    {
       return 0;
    }


    public function setActualRpms($actualRpms): void
    {
        $this->actualRpms = $actualRpms;
    }

    public function getActualRpmsAsNumber(): int
    {
        return $this->actualRpms;
    }

}