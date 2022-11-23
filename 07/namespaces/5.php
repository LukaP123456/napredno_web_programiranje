<?php
require "src/Car/CarIntro.php";
require "src/Car/CarPrice.php";
require "src/User/User.php";

/*use Test\Car\CarIntro as Intro;
use Test\Car\CarPrice as Price;
use Test\User\User as User;
*/

use Test\{
    Car\CarIntro as Intro,
    Car\CarPrice as Price
};

use User\User as User;

$car1 = new Intro();
echo $car1->sayHello()."<br>";

$car2 = new Price();
echo $car2->getQuote()."<br>";

$user1 = new User();
echo $user1->sayHelloTo('php');
