<?php
/// // The first trait
trait Price {
    public function changePriceByDollars($price, $change)
    {
        return $price + $change;
    }
}
// The second trait
trait SpecialSell {
    public function annonunceSpecialSell ()
    {
        return __CLASS__ . " on special sell";
    }
/*
    public function changePriceByDollars($price) {
        return 1;
    }
*/
}
// The Mercedes class uses both traits
class Mercedes {
    use Price;
    use SpecialSell;
}
$mercedes1 = new Mercedes();

echo $mercedes1 -> changePriceByDollars(42000, -2100)."<br>";
echo $mercedes1 -> annonunceSpecialSell();