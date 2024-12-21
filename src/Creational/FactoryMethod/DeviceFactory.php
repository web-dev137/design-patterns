<?php

namespace App\Creational\FactoryMethod;

abstract class DeviceFactory
{
    abstract function createDevice():Device;
}