<?php


namespace App\vehicles;


use App\enigine\Engine;

class AirPlane implements FlyingVehicle, Vehicle
{
    private Engine $engine;

    public function fly()
    {
        return "I'm flying";
    }

    public function run()
    {
        $engine = new Engine();
        $engine = $engine->turnOn();
        $this->engine = $engine;

        return $engine;
    }
}