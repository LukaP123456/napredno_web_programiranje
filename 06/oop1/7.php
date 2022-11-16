<?php


class Shape
{
    public bool $hasSides = true;
    public string $producer = "VTS";

    public function getDetails():string
    {
        return "<br>Name of our producer is " . $this->producer;
    }
}

class Square extends Shape
{
    public string $name = "something";

    public function greet():string
    {
        return $this->name . " " . $this->producer;
    }

    public function getDetails():string
    {
        return "<br>Our name is " . $this->name;
    }

}

$shape = new Shape();
$square = new Square();
echo $shape->getDetails();
echo $square->getDetails();
