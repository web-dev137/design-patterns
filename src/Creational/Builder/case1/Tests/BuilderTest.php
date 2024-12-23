<?php

namespace App\Creational\Builder\case1\Tests;

use App\Creational\Builder\case1\Director;
use App\Creational\Builder\case1\PepperoniPizzaBuilder;
use App\Creational\Builder\case1\Pizza;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{

    public function testCanBuildPepperoni()
    {
        $builder =  new PepperoniPizzaBuilder();
        $director = (new Director($builder))->constructPizza(30);
        $this->assertInstanceOf(Pizza::class,$director);
    }
}
