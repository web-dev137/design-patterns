<?php

namespace App\Creational\FactoryMethod;

interface Device
{
    public function getCharacteristics():string;
    public function isInStock():string;
}