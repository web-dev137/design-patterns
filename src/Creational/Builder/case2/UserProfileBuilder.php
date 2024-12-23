<?php

namespace App\Creational\Builder\case2;

class UserProfileBuilder implements BuilderInterface
{
    private UserProfile $userProfile;

    public function reset():void
    {
        $this->userProfile = new UserProfile();
    }

    public function setName(string $name): BuilderInterface
    {
        $this->userProfile->name = $name;
        return $this;
    }

    public function setSecondName(string $secondName): BuilderInterface
    {
        $this->userProfile->secondName = $secondName;
        return $this;
    }

    public function setAge($age): BuilderInterface
    {
        $this->userProfile->age = $age;
        return $this;
    }

    public function setGender(string $gender): BuilderInterface
    {
        $this->userProfile->gender = $gender;
        return $this;
    }

    public function setLastJobPlace(string $company): BuilderInterface
    {
        $this->userProfile->jobPlace = $company;
        return $this;
    }

    public function setLastJobPosition(string $position): BuilderInterface
    {
        $this->userProfile->jobPosition = $position;
        return $this;
    }

    public function setJobExperience(float $years): BuilderInterface
    {
        $this->userProfile->jobExperience = $years;
        return $this;
    }

    public function setEducation(string $education): BuilderInterface
    {
        $this->userProfile->education = $education;
        return $this;
    }

    public function build(): UserProfile
    {
        return $this->userProfile;
    }
}