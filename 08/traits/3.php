<?php
/*
Traits use a form of inheritance that is known as horizontal inheritance in which the code
from the trait is included in the classes in which it is used. It is pretty much like using ‘require’
or ‘include’ in the classes to include code from the outside, albeit not hackish.

• In a trait it is possible to put concrete (real) methods, abstract methods, properties and even
constants.
• While the same class can use more than one trait, it can only inherit from one class.
• Traits do not respect the visibility scope, thus allowing a trait’s methods to access private
properties and methods in the class that uses them.
*/

trait Price {
// The method needs the $price property.
    public function changePriceByDollars($change)
    {
        return $this -> price += $change;
    }
}
class Mercedes {
    use Price;
// The $price is private
    private $price;
    public function __construct($price)
    {
        $this -> price = $price;
    }
    public function getPrice()
    {
        return $this -> price;
    }
}
$mercedes1 = new Mercedes(42000);
echo $mercedes1 -> getPrice();
$mercedes1 -> changePriceByDollars(-2100);
echo "<br>".$mercedes1 -> getPrice();

/*
In some cases, the use of traits can save the day and prove to be preferable to using inheritance.
Think of a scenario in which number of classes implement the same interface and so share its code,
but only a few of the classes (and not all of them) need a certain piece of that code. It is reasonable
to use inheritance for those methods that are shared by all of the classes, while leaving it better of
to traits to hold the methods that are needed in only some of the classes.

For example, if we have three classes that inherit the Car interface (Mercedes, Bmw, and Audi)
and we need the method that
handles special sell to work in only two of these classes (Mercedes and Bmw),
we will use a trait so
that the code will be shared only by the classes that need it.
 */