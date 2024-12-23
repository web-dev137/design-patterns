<?php

namespace App\Creational\Builder\case2;

interface BuilderInterface
{
    public function reset():void;
    public function setName(string $name):self;
    public function setSecondName(string $secondName):self;
    public function setAge(int $age):self;
    public function setGender(string $gender):self;
    public function setLastJobPosition(string $position):self;
    public function setLastJobPlace(string $company):self;
    public function setJobExperience(float $years):self;
    public function setEducation(string $education):self;
    public function build():UserProfile;
}