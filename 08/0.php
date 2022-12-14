<?php

/*
The basic difference between these two are that const defines constants at compile time,
whereas define() defines them at run time.

We can't use the const keyword to declare constant in conditional blocks, while with define() we can achieve that.

const accepts a static scalar(number, string or other constants like true, false, null, __FILE__), whereas define()
takes any expression.

consts are always case-sensitive, whereas define() allows you to define case-insensitive constants by passing true
as the third argument (not in PHP 8).

const can also be utilized within a class or interface to declare a class constant or interface constant,
while define() can't be utilized for this reason

 */

const SCHOOL = 'Subotica Tech';

echo SCHOOL;

//define('SCHOOL', 'Subotica Tech');

$a = $b = 20;

/*
if($a>10) {
    const CITY = 'Subotica'; // Invalid
}
*/

if ($b > 10) {
    define('CITY', 'Subotica');
}


class First
{
    const LANGUAGE = 'PHP'; // valid

    public function writeData() {
        echo "<br>".self::LANGUAGE;
        echo "<br>".CITY;
    }

    static public function getData() {
        return self::LANGUAGE;
}
}

//class Second
//{
//    define('LANGUAGE','PHP'); // invalid
//
//    public function writeData() {
//        echo self::LANGUAGE;
//    }
//}

echo "<br>".First::getData();

$first = new First();
$first->writeData();