<?php

namespace App\Creational\Builder\case1\ingredients;

abstract class Ingredient
{

    public function __construct(
        protected string $name,
        protected float $count
    ){}

    public function __get($property)
    {
        return $this->$property;
    }
}