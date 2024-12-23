<?php

namespace App\Creational\Builder\case1;

use App\Creational\Builder\case1\ingredients\Cheese;
use App\Creational\Builder\case1\ingredients\PizzaFilling;
use App\Creational\Builder\case1\ingredients\Sauce;

class PepperoniPizzaBuilder implements PizzaBuilder
{
    private Pizza $pizza;

    public function reset()
    {
        $this->pizza = new Pizza();
    }

    public function setSize(int $size):PizzaBuilder
    {
        $this->pizza->size = $size;
        return $this;
    }

    public function setCheese():self
    {
        $this->pizza->addIngredient("cheese",new Cheese("mozzarella",150));
        return $this;
    }

    public function setFilling():self
    {
        $this->pizza->addIngredient("filling",new PizzaFilling("pepperoni",100));
        return $this;
    }

    public function setSauce():self
    {
        $this->pizza->addIngredient("sauce",new Sauce("tomato",150));
        return $this;
    }

    public function build():Pizza
    {
        return $this->pizza;
    }
}