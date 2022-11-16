<?php

class Dog
{

    public int $numLegs = 4;
    public string $name;
    public string $age;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function setAge(int $age):void
    {
        $this->age = $age;
    }

    public function getAge():int
    {
        return $this->age;
    }

    public function bark():string
    {
        return "Woofs!";
    }

    public function greet():string
    {
        return "<p>hello, my name is " . $this->name . "</p>";
    }
}