<?php

declare(strict_types=1);
namespace App\Creational\FactoryMethod;

class LaptopFactory extends DeviceFactory
{
    public function createDevice(): Device
    {
        return new Laptop();
    }
}