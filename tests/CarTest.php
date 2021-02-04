<?php


namespace App\Tests;


use App\enigine\Engine;
use App\vehicles\Car;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Routing\Annotation\Route;

/** @test */
class CarTest extends TestCase
{
    public function shouldGetEngineTurnedOn()
    {
        $car = new Car();
        $this->assertEquals(new Engine(), $car->run());
    }

    public function shouldGetInfoAboutDrive()
    {
        $car = new Car();
        $this->assertEquals(new Engine(), $car->drive());
    }
}