<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 17</title>
</head>
<body>
<?php
for ($j = 1; $j <= 10; $j++)
    echo "php<br>";

echo "<br><br>";

for ($i = 1; $i <= 10; $i++) {
    if ($i == 10)
        echo "$i";
    else
        echo "$i, ";
}

echo "<br><br>";

for ($i = 10; $i >= 1; $i--) {
    if ($i % 2 == 0)
        echo "<span style=\"color:blue;\">$i</span><br>";
    else
        echo "<span style=\"color:red;\">$i</span> <br>";
}

$default = 2000;

echo "<select name=\"year\">";
echo "<option value=\"choose\">choose</option>\n";
//echo '<option value="choose">choose</option>';
for ($i = 2019; $i >= 1935; $i--) {
    if($i===$default)
    echo "<option value=\"$i\" selected>$i</option>\n";
    else
    echo "<option value=\"$i\">$i</option>\n";
}
   
echo "</select>";
?>
</body>
</html>