<?php
/*
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
*/
include "dog.php";

if (class_exists("Dog"))
    $dog = new Dog("Test", 2);
else
    die("Class is not found!");


$dog1 = new Dog("Lesi", 2);
$dog2 = new Dog("PitBull", 3);
echo $dog1->bark();
var_dump($dog1);
$dog1->setAge(12);
echo $dog2->greet();
var_dump($dog);
var_dump($dog1);
var_dump($dog2);
