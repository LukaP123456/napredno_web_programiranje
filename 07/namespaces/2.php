<?php
require "src/Car/CarIntro.php";

use Test\Car\CarIntro as Intro;

$carIntro = new Intro();

echo $carIntro -> sayHello();
