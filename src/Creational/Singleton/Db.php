<?php

namespace App\Creational\Singleton;

class Db extends Singleton
{
    public function connect():string
    {
        return "connect";
    }
}