<?php

namespace App\Creational\FactoryMethod\Tests;

use App\Creational\FactoryMethod\Device;
use App\Creational\FactoryMethod\LaptopFactory;
use PHPUnit\Framework\TestCase;

class LaptopModelTest extends TestCase
{
    protected Device $laptop;
    protected function setUp(): void
    {
        $this->laptop = (new LaptopFactory())->createDevice();
    }

    public function testGetCharacteristics()
    {
        $this->assertEquals(
            "Returning an array of laptop characteristics",
            $this->laptop->getCharacteristics()
        );
    }

    public function testIsInStock()
    {
        $this->assertEquals(
            "We have this laptop in stock",
            $this->laptop->isInStock()
        );
    }

}
