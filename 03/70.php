<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 70</title>
</head>

<body>
<?php

$error = isset($_GET["error"]) ? (int)$_GET["error"] : 0;

if ($error == 1)
    echo "<b>Please, choose a year!</b><br><br>";

?>
<form name="form" method="post" action="70-2.php">
    <?php

    echo "<label for=\"year\">Year:</label> <select name=\"year\" size=\"1\" id=\"year\">\n";
    echo "<option value=\"choose\">- choose -</option>\n";
    for ($i = 2008; $i >= 1908; $i--) {
        echo "<option value=\"$i\">$i</option>\n";
    }
    echo "</select>\n ";

    ?>
    <br>
    <br>

    <input type="submit" name="sb" value="send">
    <input type="reset" name="rb" value="cancel">
</form>
</body>
</html>

