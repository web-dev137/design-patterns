<?php

namespace App\Creational\Builder\case2\Tests;

use App\Creational\Builder\case2\UserProfile;
use App\Creational\Builder\case2\UserProfileBuilder;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{
    public function testCanBuildUserProfile()
    {
        $builder =  new UserProfileBuilder();
        $builder->reset();
        $userProfile = $builder
            ->setName("Bob")
            ->setSecondName("Johnson")
            ->setGender("M")
            ->setAge(25)
            ->setLastJobPlace("Ford's factory")
            ->setLastJobPosition("driver")
            ->setJobExperience(3)
            ->build();
        $this->assertInstanceOf(UserProfile::class,$userProfile);
    }
}
