<?php

namespace App\Creational\FactoryMethod\Tests;

use App\Creational\FactoryMethod\Laptop;
use App\Creational\FactoryMethod\LaptopFactory;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    public function testCanCreateLaptop()
    {
         $factory = new LaptopFactory();
         $laptop = $factory->createDevice();
         $this->assertInstanceOf(Laptop::class,$laptop);
    }
}
