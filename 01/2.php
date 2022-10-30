<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 2</title>
</head>
<body>
<?php


echo "<p title=\"Subotica2\">
	  Subotica2<br>
	  Subotica
 	  </p>";

echo '<p title="PHP programming">PHP</p>';

$language = "PHP";
$number = 10;
$languages['PHP'] = 7;
$languages['CSS'] = 3;

$numbers[0][0] = 12;
$numbers[0][1] = 21;

echo "My favourite language is $language. But I also likes CSS because {$number}px value!";

echo "Second character in $language word is $language[1]. <br> version of PHP is {$languages['PHP']}.";

echo "<br>{$numbers[0][1]}";

$a['key'] = "vts";

echo "This works: {$a['key']}";
//echo "This works: $a['key']";

?>
</body>
</html>