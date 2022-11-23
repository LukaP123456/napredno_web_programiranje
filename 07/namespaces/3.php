<?php

require "src/Car/CarIntro.php";
require "src/Car/CarPrice.php";
require "src/Car/CarColor.php";

use Test\Car\CarIntro as Intro;
$carIntro = new Intro();

echo $carIntro -> sayHello();

// We use the backslash in front of the class name in order to call a class
// from the global namespace

$carColor = new CarColor();

echo "<br>".$carColor -> getColor();
