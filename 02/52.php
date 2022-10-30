<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>php 52</title>
</head>
<body>
<?php
 
$it = "HTML CSS XML PHP";

$technologies = explode(" ",$it);
//$technologies = explode(" ",$it,2);
var_dump($technologies);


//Returns an array of strings, each of which is a substring of string formed by splitting it on boundaries formed by the string delimiter.

echo "Original string: $it <br><br>";

foreach ($technologies as $tech) 
	echo "$tech<br>";

$it = "HTML   CSS  XML PHP";

$technologies = explode(" ",$it);

echo "<pre>";
var_dump($technologies);
echo "</pre>";
$b = 1;
foreach ($technologies as $tech) 
{
	echo "$b. $tech<br>";
	if($tech!="")
		$tech2[] = $tech;
	$b++;
}

foreach ($tech2 as $t)
	echo "$t<br>";


var_dump($tech2);
?> 
</body>
</html>