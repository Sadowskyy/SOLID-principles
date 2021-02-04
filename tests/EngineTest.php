<?php


namespace App\Tests;


use App\enigine\Engine;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Routing\Annotation\Route;

/** @test */
class EngineTest extends TestCase
{
 public function turnEngineOn(){
     $engine = new Engine();
     $engine->turnOn();

     $this->assertEquals(true, $engine->isRunning());
 }
}