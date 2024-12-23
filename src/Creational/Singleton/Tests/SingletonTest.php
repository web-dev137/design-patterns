<?php

namespace App\Creational\Singleton\Tests;

use App\Creational\Singleton\Db;
use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{
   public function testSingleton()
   {
       $db = Db::getInstance();
       $this->assertEquals("connect",$db->connect());
   }
}
