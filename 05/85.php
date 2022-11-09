<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Captcha</title>
</head>
<body>
<form method="post" name="contact" action="85-captcha.php">
    <label for="code">
        Enter code from image:
    </label>
    <input type="text" name="code" id="code">
    <img src="85-image.php" alt="captcha" id="captcha">
    <a href="#" onclick="document.getElementById('captcha').src = '85-image.php?' + Math.random(); return false">Reload
        Captcha</a>
    <br><br>
    <input type="submit" value="send">
    <input type="reset" value="cancel">
</form>
<br><br>
<?php


$p = isset($_GET['p']) ? (int)$_GET['p'] : "";

if ($p == "1")
    echo "Error in code!";


?>
</body>
</html>