<?php
namespace Test\Car; #uncomment for 4th and 5th example
class CarPrice {

    public function getQuote():string|int
    {
        // $date = new DateTime();
        $date = new \DateTime();
        //var_dump($date);
        return "QUOTE ".$date->format('d.m.Y.');
    }
}
