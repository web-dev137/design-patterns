<?php

namespace App\Creational\Builder\case1;

use App\Creational\Builder\case1\ingredients\Ingredient;

class Pizza
{
    /**
     * @var Ingredient[][]
     */
    private array $ingredients;

    private int $size=25;

    public function __set(string $name, $value): void
    {
        $this->$name = $value;
    }

    public function addIngredient(string $type,Ingredient $ingredient)
    {
        $this->ingredients[$type][] = $ingredient;
    }

    public function getIngredient(string $type): array
    {
        return $this->ingredients[$type];
    }

}