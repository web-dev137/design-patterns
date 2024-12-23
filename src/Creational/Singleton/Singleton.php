<?php

namespace App\Creational\Singleton;

class Singleton
{
    protected static self|null $instance = null;

    private function __construct(){}
    private function __clone(){}
    final protected function __wakeup(){}

    public static function getInstance():static
    {
        if(static::$instance === null) {
            static::$instance = new static();
        }
        return static::$instance;
    }
}