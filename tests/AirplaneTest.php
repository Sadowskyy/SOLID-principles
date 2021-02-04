<?php


namespace App\Tests;


use App\enigine\Engine;
use App\vehicles\AirPlane;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Routing\Annotation\Route;
/** @test */
class AirplaneTest extends TestCase
{
    public function shouldGetEngineTurnedOn()
    {
        $plane = new AirPlane();
        $this->assertEquals(new Engine(), $plane->run());
    }

    public function shouldGetInformationAboutFly()
    {
        $plane = new AirPlane();
        $this->assertEquals("I'm flying", $plane->fly());
    }
    public function shouldGetInflormationAboutFly()
    {
        $this->assertEquals(1, 1);
    }
}