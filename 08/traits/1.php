<?php /*
trait TraitName {
    // The trait's code
}

Trait, a new feature that was introduced into PHP version 5.4, as it allows a
class to get its code from more than one trait.

In fact, it allows a class to
use as many traits as it needs.

*/

trait Price
{
    public function changePriceByDollars($price, $change)
    {
        return $price + $change;
    }
}

class Bmw
{
    use Price;
}

class Mercedes
{
    use Price;
}

$bmw1 = new Bmw();
echo $bmw1->changePriceByDollars(45000, +3000) . "<br>";
$mercedes1 = new Mercedes();
echo $mercedes1->changePriceByDollars(42000, -2100);