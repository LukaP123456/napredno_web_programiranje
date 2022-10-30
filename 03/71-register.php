<?php

// isset is very important!!!!

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$password = $_POST["password"];
$os = $_POST["os"];
$year = $_POST["year"];
$month = $_POST["month"];
$day = $_POST["day"];
$comment = $_POST["comment"];


//foreach($_POST as $key=>$value) {
//	$$key = $value;
//}


$post_vars = ["fname", "lname", "email", "password", "os", "year", "month", "day", "comment"];

foreach ($post_vars as $var) { // "fname"
    if (isset($_POST["$var"])) // $_POST["fname"]
        $$var = $_POST["$var"]; // $fname = $_POST["fname"]
    else
        $$var = ""; // $fname = "";
}


$comment = urlencode($comment); //IMPORTANT for comment if you send data with get method
// http://php.net/manual/en/function.urlencode.php


if (empty($fname) or empty($lname) or empty($email) or empty($password) or $year == "null" or $month == "null" or $day == "null") {
    header("Location:71.php?error=1&fname=$fname&lname=$lname&email=$email&year=$year&month=$month&day=$day&os=$os&comment=$comment");
    exit();
} else {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>php 71</title>
    </head>

    <body>

    <?php


    echo "<b>Send data:</b><br><br>";

    echo "Firstname = $fname<br>";
    echo "Lastname = $lname<br>";
    echo "E-mail = $email<br>";
    echo "Password = $password<br>";
    echo "Operation system = $os<br>";
    echo "Birth year  = $year.$month.$day.<br>";
    echo "Comment = $comment<br>";

    ?>

    </body>
    </html>
    <?php
}

?>