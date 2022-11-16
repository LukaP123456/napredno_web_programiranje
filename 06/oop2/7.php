<?php

/*
   ABSTRACT CLASS

    A class designed only as a parent from which sub-classes may be derived.

    Abstract classes are classes that may contain abstract method(s).
    An abstract method is a method that is declared, but contains no implementation.
    Abstract classes can not be instantiated, and require subclasses to provide
    implementations for the abstract methods.

 */

abstract class Products
{
    protected string $name;
    protected string $type;

    public function __construct($name,  $type)
    {
        $this->type = $type;
        $this->name = $name;
    }

    public function getType():string
    {
        return $this->type;
    }

    public function getName():string
    {
        return $this->name;
    }

    abstract public function getTypeName();

}

class Product extends Products
{
    public function getTypeName():string
    {
        return $this->name . ':' . $this->type;
    }
}


class Product2 extends Products
{

    public function __construct($name, $type)
    {
        parent::__construct($name, $type);
        $this->type = "2kg";
    }

    public function getTypeName():string
    {
        return "<p>my name is " . $this->name . " and I'm " . $this->type . "</p>";
    }

}

//$product = new Products('Paper', '80g');
$product = new Product('Paper', '80g');
$product2 = new Product2('Stone', '1kg');

echo $product->getTypeName();
echo $product2->getTypeName();