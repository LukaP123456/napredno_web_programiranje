<?php

class Shape
{
    public bool $hasSides = true;
    public bool $hasName = true;
    protected string $producer = "VTS";
}

class Square extends Shape
{
    public string $name = "something";

    public function greet():string
    {
        return $this->hasName . " " . $this->producer;
    }
}

$shape = new Shape();
var_dump($shape);

$square = new Square();
var_dump($square);

if (property_exists($square, "hasSides")) {
    echo "I have sides!";
}

echo $square->name;
echo $square->greet();
//echo $square->producer;
