<?php

namespace App\Creational\FactoryMethod;

use JetBrains\PhpStorm\Pure;

class MobileFactory extends DeviceFactory
{
    #[Pure]
    public function createDevice(): Device
    {
        return new Mobile();
    }
}