<?php

namespace App\Creational\Builder\case1;

interface PizzaBuilder
{
    public function reset();
    public function setSize(int $size):PizzaBuilder;
    public function setSauce():PizzaBuilder;
    public function setCheese():PizzaBuilder;
    public function setFilling():PizzaBuilder;
    public function build():Pizza;
}