<?php


namespace App\Tests;


use App\enigine\Engine;
use PHPUnit\Framework\TestCase;

/** @test */
class EngineTest extends TestCase
{
    public function turnEngineOn()
    {
        $engine = Engine::turnOn();

        $this->assertEquals(true, $engine->isRunning());
    }

    public function turnEngineOff()
    {
        $engine = Engine::turnOn();

        $engine->turnOff();

        $this->assertEquals(false, $engine->isRunning());
    }
}