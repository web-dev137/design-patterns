<?php

namespace App\Creational\Builder\case1\Tests;

use App\Creational\Builder\case1\Director;
use App\Creational\Builder\case1\PepperoniPizzaBuilder;
use App\Creational\Builder\case1\Pizza;
use PHPUnit\Framework\TestCase;

class BuiltModelTest extends TestCase
{
    private Pizza $builtModel;

    protected function setUp(): void
    {
        $builder =  new PepperoniPizzaBuilder();
        $this->builtModel = (new Director($builder))->constructPizza(30);
    }

    public function testSaucePepperoni()
    {
        $ingredient = $this->builtModel->getIngredient("sauce");
        $sauce = array_shift($ingredient);
        $this->assertEquals("tomato",$sauce?->name);
    }

    public function testCheesePepperoni()
    {
        $ingredient = $this->builtModel->getIngredient("cheese");
        $cheese = array_shift($ingredient);
        $this->assertEquals("mozzarella",$cheese?->name);
    }

    public function testFillingPepperoni()
    {
        $ingredient = $this->builtModel->getIngredient("filling");
        $filling = array_shift($ingredient);
        $this->assertEquals("pepperoni",$filling?->name);
    }
}
