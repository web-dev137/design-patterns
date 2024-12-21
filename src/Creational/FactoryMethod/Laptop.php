<?php

namespace App\Creational\FactoryMethod;

class Laptop implements Device
{
    public function getCharacteristics(): string
    {
        return "Returning an array of laptop characteristics";
    }

    public function isInStock(): string
    {
        return "We have this laptop in stock";
    }
}