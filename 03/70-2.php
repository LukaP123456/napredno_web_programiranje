<?php
$year = "";

if (isset($_POST["year"]))
    $year = (int)$_POST["year"];

if ($year > 2008 or $year < 1908) // $year=="choose"
{
    header("Location:70.php?error=1");
    exit();
}

$age = Date("Y") - $year;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 70</title>
</head>

<body>

<?php
echo "You are $age years old.";
?>
</body>
</html>