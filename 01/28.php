<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 28</title>
</head>
<body>
<?php

function greetTheWorld()
{
    echo "Hello World! <br>";
}

function greetings($name = "default")
{
    echo "Hello $name! <br>";
}

$function_var1 = "greetTheWorld";

$function_var1(); // greetTheWorld()

$function_var = "greetings";

$function_var('php'); // greetings('php')

$function_var(); // greetings()

//$function_var = $_GET['link'];
// $function_var(); // contact()
/*
 $answer = "contact";
$answer = "download";
$answer = "register;
if($answer == "contact")
contact();
elseif($answer=="download")
download();

<a href="index.php?link=contact">contact</a>
<a href="index.php?link=products">products</a>
<a href="index.php?link=about_us">about us</a>


if($_GET['link']== "contact")
contact();
else if ($_GET['link'] == "products")
products();
else if
about_us();

$links = ['contact','about_us','products',];

in_array

 */

function mp3() {
    echo "I'm mp3";
}

$_GET['link'] = "mp3";

$function = $_GET['link']; // "contact2"
$links = ['contact','about_us','products','mp3','download'];
if(in_array($function, $links)) {
    $function(); // mp3()
}

?>
</body>
</html>