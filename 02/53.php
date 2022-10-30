<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 53</title>
</head>
<body>
<?php

$technologies = array("XHTML", "CSS", "XML", "PHP");
$it = implode(", ", $technologies);
//Join array elements with a glue string.

echo $it; // XHTML, CSS, XML, PHP

$technologies2 = array("XHTML", "CSS", "XML", "PHP");
$it2 = join(" * ", $technologies2);
//Alias of implode()
echo "<br><br>$it2"; // XHTML * CSS * XML * PHP

?>
</body>
</html>