<?php


namespace App\enigine;


class Engine
{
    private $isTurnOn = false;




    public function turnOn()
    {
        $this->isTurnOn = true;
    }

    public function isRunning()
    {
        return $this->isTurnOn;
    }
}