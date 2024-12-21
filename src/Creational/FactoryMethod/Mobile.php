<?php

namespace App\Creational\FactoryMethod;

class Mobile implements Device
{
    public function getCharacteristics(): string
    {
        return "Returning an array of mobile characteristics";
    }

    public function isInStock(): string
    {
        return "We have this mobile in stock";
    }
}