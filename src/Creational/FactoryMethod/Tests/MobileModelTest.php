<?php

namespace App\Creational\FactoryMethod\Tests;

use App\Creational\FactoryMethod\Device;
use App\Creational\FactoryMethod\MobileFactory;
use PHPUnit\Framework\TestCase;

class MobileModelTest extends TestCase
{
    protected Device $laptop;
    protected function setUp(): void
    {
        $this->laptop = (new MobileFactory())->createDevice();
    }

    public function testGetCharacteristics()
    {
        $this->assertEquals(
            "Returning an array of mobile characteristics",
            $this->laptop->getCharacteristics()
        );
    }

    public function testIsInStock()
    {
        $this->assertEquals(
            "We have this mobile in stock",
            $this->laptop->isInStock()
        );
    }
}
