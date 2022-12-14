<?php

trait Price
{

    public function changePriceByDollars($change)
    {
        return $this->price += $change;
    }

    public function sayHello()
    {
        return "Hello Price!";
    }
}

trait Color
{
    public function sayHello()
    {
        return "Hello Color!";
    }

}


class Mercedes
{
    use Price, Color {
        Price:: sayHello insteadof Color;
    }

    private $price;

    public function __construct($price)
    {
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }
}

$mercedes1 = new Mercedes(42000);
echo $mercedes1->getPrice();
$mercedes1->changePriceByDollars(-2100);
echo "<br>" . $mercedes1->getPrice();

echo "<br>" . $mercedes1->sayHello();

