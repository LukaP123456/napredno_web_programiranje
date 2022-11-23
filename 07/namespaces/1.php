<?php
/*Namespaces are qualifiers that solve two different problems:

    They allow for better organization by grouping classes that work together to perform a task
    They allow the same name to be used for more than one class

*/


// 1. Require the namespaced file
require "src/Car/CarIntro.php";

// 2. Import the namespace
//use Test\Car\CarIntro;

// 3. Use the class from the context of the namespace
$carIntro = new Test\Car\CarIntro();
//$carIntro = new CarIntro();

echo $carIntro -> sayHello();
