<?php
require "src/Car/CarIntro.php";
require "src/Car/CarPrice.php";

use Test\Car\CarIntro as Intro;
use Test\Car\CarPrice as Price;

$carIntro = new Intro();

echo $carIntro -> sayHello();

$carPrice = new Price();
echo $carPrice -> getQuote();
