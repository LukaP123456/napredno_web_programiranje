<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 20</title>
</head>
<body>
<?php
$counter = -2;

for (; $counter <= 2; $counter++) { // -2,-1,0,1,2
    if ($counter == 0)
        break;

    $value = 4000 / $counter;

    echo "4000 with $counter divided is $value.<br>";

}

echo "<br><br>";

$counter = -2;

for (; $counter <= 2; $counter++) {
    if ($counter == 0)
        continue;

    $value = 4000 / $counter;
    echo "4000 with $counter divided is $value.<br>";
}

$numbers = [1,23,44,56];

$sum = 0;

for($i=0;$i<count($numbers);$i++) {
//    if($numbers[$i]%2!=0)
//    continue;

    if($numbers[$i]%2==0)
    $sum = $sum + $numbers[$i];
}

    echo "<p>Sum is: $sum</p>";







?>
</body>
</html>