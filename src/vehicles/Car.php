<?php


namespace App\vehicles;


use App\enigine\Engine;

class Car implements Vehicle, DrivingVehicle
{
    private Engine $engine;

    public function run()
    {
        $engine = new Engine();
        $engine = $engine->turnOn();
        $this->engine = $engine;

        return $engine;
    }

    public function drive()
    {
        return "I'm driving";
    }
}