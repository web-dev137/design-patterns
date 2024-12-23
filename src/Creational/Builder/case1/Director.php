<?php

namespace App\Creational\Builder\case1;

use App\Creational\Builder\case1\ingredients\PizzaFilling;

class Director
{
    public function __construct(private PizzaBuilder $builder){}

    public function constructPizza(int $size): Pizza
    {
        $this->builder->reset();
        return $this->builder->setSize($size)
            ->setFilling()
            ->setSauce()
            ->setCheese()
            ->build();
    }
}