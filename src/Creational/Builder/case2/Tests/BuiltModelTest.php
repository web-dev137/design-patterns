<?php

namespace App\Creational\Builder\case1\Tests;

use App\Creational\Builder\case1\Director;
use App\Creational\Builder\case1\PepperoniPizzaBuilder;
use App\Creational\Builder\case1\Pizza;
use App\Creational\Builder\case2\UserProfile;
use App\Creational\Builder\case2\UserProfileBuilder;
use PHPUnit\Framework\TestCase;

class BuiltModelTest extends TestCase
{
    private UserProfile $builtModel;

    protected function setUp(): void
    {
        $builder =  new UserProfileBuilder();
        $builder->reset();
        $this->builtModel = $builder
            ->setName("Bob")
            ->setSecondName("Johnson")
            ->setGender("M")
            ->setAge(25)
            ->setLastJobPlace("Ford's factory")
            ->setLastJobPosition("driver")
            ->setJobExperience(3)
            ->build();
    }

    public function testUserProfileName()
    {
        $this->assertEquals("Bob",$this->builtModel->name);
    }

    public function testUserProfileSecondName()
    {
        $this->assertEquals("Johnson",$this->builtModel->secondName);
    }

    public function testJobPlace()
    {
        $this->assertEquals("Ford's factory",$this->builtModel->jobPlace);
    }
    public function testJobPosition()
    {
        $this->assertEquals("driver",$this->builtModel->jobPosition);
    }
    public function testJobExperience()
    {
        $this->assertEquals(3,$this->builtModel->jobExperience);
    }
}
