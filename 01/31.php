<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 31</title>
</head>
<body>
<?php


$users = ["Robert", 12, true, "Peter"]; // 0 1 2 3
// $users = array("Robert", 12, true, "Peter"); // 0 1 2 3

echo $users[0] . "<br>"; // Robert
echo $users[2] . "<br>"; // true

$users[] = "Robert"; // 4
$users[] = "Judith"; // 5
$users[] = "Mark";  // 6
$users[] = "Peter"; // 7


echo "<pre>";
print_r($users); //Prints human-readable information about a variable.
echo "</pre>";
echo "<br>";

var_dump($users);

$retroGames = ['Pacman', 'Donkey Kong', 'Exploding Fist 2', 'Wizard of Wor']; //  as of PHP 5.4

var_dump($retroGames);
echo "<hr>";

$array = array(
    1 => "a",
    "1" => "b",
    1.5 => "c",
    true => "d",
);

var_dump($array);

echo "<hr>";

$arraySecond = ["a", "b", 6 => "c", "d"];

var_dump($arraySecond);


# http://php.net/manual/en/book.array.php
?>
</body>
</html>