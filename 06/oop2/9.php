<?php

interface Animal
{
    public function breath();
    public function eat();
    public function setName($name);
}

class Dog implements Animal
{

    private string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

//new method
    public function bark():string
    {
        return 'wof '.$this->name;
    }

//implemented methods
    public function breath():string
    {
        return 'breathing ';
    }

    public function eat():string
    {
        return 'eating';
    }
}

class Cat implements Animal
{
    private string $name;
    private string $age;

    public function __construct($age, $name)
    {
        $this->age = $age;
        $this->name = $name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName():string {
        return $this->name;
    }

    public function breath():string {
        return 'breaths '.$this->age;
    }

    public function eat():string {
        return 'ham, ham';
    }
//new method
    public function purr():string{
        return 'purring';
    }
}

$dog = new Dog('Lucky');
echo "<b>dog</b><br>";
echo $dog->breath() . "<br>";
echo $dog->bark() . "<br>";
echo $dog->eat() . "<br>";

echo "<b>cat</b><br>";
$cat = new Cat(4,'kitty');
$cat->setName('Kitty 2');
echo "Hello ".$cat->getName()."<br>";
echo $cat->breath()."<br>";
echo $cat->eat()."<br>";
echo $cat->purr()."<br>";