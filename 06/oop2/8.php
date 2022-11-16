<?php

/*
 Interfaces

An interface is very similar to an abstract class,
but it has no properties and cannot
define how methods are to be implemented. Instead,
it is simply a list of methods that must be implemented.

In its most common form, an interface is a group of
related methods with empty bodies.
A child class can implement multiple interfaces.
*/

interface Shape
{
    public function getArea();
}

interface Shape2
{
    public function getTitle();
}

class Circle implements Shape, Shape2
{
    private int $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function getArea(): float
    {
        return $this->radius * $this->radius * pi();
    }

    public function getTitle(): string
    {
        return "I'm title";
    }
}


class Rectangle implements Shape
{
    private int $width;
    private int $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea(): float|int
    {
        return $this->width * $this->height;
    }
}

$rectangle = new Rectangle(3, 3);
echo "Rectangle area is :" . $rectangle->getArea() . "<br>";

$circle = new Circle (5);
echo "Circle area is: " . $circle->getArea();
echo "<br>Circle title is: " . $circle->getTitle();