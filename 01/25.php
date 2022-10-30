<?php
declare(strict_types=1); // strict requirement
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 25</title>
</head>
<body>
<?php
$v1 = (int)4;
$v2 = (int)"4 days";


if (is_int($v1) and is_int($v2)) {
    echo "Result is " . addNumbers($v1, $v2);
} else {
    echo "Variables are not numeric values!";
}


function addNumbers(int $a, int $b)
{
    return $a + $b;
}


/** Something with some variables
 * @param int $a
 * @param int $b
 * @return int
 */
function addNumbers2(int $a, int $b): int
{
    return $a + $b;
}

echo addNumbers2(6, "6 days");

?>
</body>
</html>