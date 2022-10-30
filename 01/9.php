<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 9</title>
</head>
<body>
<?php


/*
  ! 
  !=
  !==
  ==
  ===


and &&
or || 
xor
!
*/
$variable1 = true;
$variable2 = false;

echo "true || false = ";
echo $variable1 || $variable2;
echo "<br>";
$x = 4;
echo "($x>2) and ($x<15) = ";
echo ($x > 2) and ($x < 15); // &&
echo "<br>";
echo "($x<2) or ($x<15) = ";
echo ($x < 2) or ($x < 15);
echo "<br>";
echo "!($x<2) and ($x>15) = ";
echo !($x < 2) and ($x > 15); // true and false = false

echo "<br><br>";
echo $variable1 xor $variable2;
/*

AND

0 0 0
0 1 0 
1 0 0
1 1 1

OR

0 0 0
0 1 1 
1 0 1
1 1 1

XOR

0 	0 	0
0 	1 	1
1 	0 	1
1 	1 	0

*/

?>
</body>
</html>