<?php

namespace App\Creational\Builder\case2;

class UserProfile
{
    public string $name;
    public string $secondName;
    public int $age;
    public string $gender;
    public string $jobPlace;
    public string $jobPosition;
    public string $jobExperience;
    public string $education;

    public function __set($property,$val)
    {
        $this->$property = $val;
    }

    public function __get($property)
    {
        return $this->$property;
    }
}