<?php
declare(strict_types=1);
/*
function __autoload($className) // "Person" -> person.php Person.php
{
    $className = strtolower($className); // person

    if (file_exists($className . '.php')) { // person.php
        require_once $className . '.php'; // new Person, Person person.php
        echo "$className was included"; //
    }
}

*/
function auto_loader($className)
{
    $file = strtolower($className) . ".php"; // person.php
    //this will check if file exist
    if (is_file($file)) {
        //finally if file exist then it will include the file
        require_once $file;
        //echo "$className was included";
    }
}

spl_autoload_register("auto_loader",true);

/*
// Or, using an anonymous function as of PHP 5.3.0
spl_autoload_register(function ($class) {
    include 'classes/' . $class . '.class.php';
});


 */



$teacher = new Person("test", 23, "tests"); // person.php
var_dump($teacher);

$dog = new Person("test", 22, "marki");

if ($dog instanceof Dog) // is_a
    echo "<p>I'm a dog</p>";

if ($dog instanceof Person)
    echo "<p>I'm a person</p>";

var_dump($dog);