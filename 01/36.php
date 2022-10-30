<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 36</title>
</head>
<body>
<?php
// array(1,3,4,"dd");

$users = [
    ["name" => "Peter",
        "password" => "p3t3r"],
    ["name" => "Robert",
        "password" => "4t4"],
    ["name" => "Mark",
        "password" => "m@rk0nee"]
];

/*$users = array(
	array("name" => "Peter",
		"password" => "p3t3r"),
	array("name" => "Robert",
		"password" => "4t4"),
	array("name" => "Mark",
		"password" => "m@rk0nee")
);*/

echo $users[0]["password"];
echo "<br>";
echo $users[2]["name"];

/*
  name    password
  Peter   p3t3r
  Robert  4t4
  Mark	  m@rkonee
*/

var_dump($users);

?>
</body>
</html>