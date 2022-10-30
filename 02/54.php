<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 54</title>
</head>
<body>
<?php

$str = "0 2 4 SuBotiCa";
$uc = strtoupper($str);
$lc = strtolower($str);
$name = "jOhaNN sebAsTIaN bACh";
$name2 = ucwords(strtolower($name));
//Uppercase the first character of each word in a string.

echo "<p><b>original text:</b> $str <br>";
echo "<b>velika slova / uppercase:</b> $uc <br>";
echo "<b>mala slova / lowercase:</b> $lc </p>";

echo "<p><b>original text:</b> $name <br>";
echo "<b>Preuredjen / (ucwords & strtolower):</b> $name2</p>";

?>
</body>
</html>