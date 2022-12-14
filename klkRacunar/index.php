<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="checkUser.php">
    <span>Username:</span>
    <input type="text" name="username">
    <br>
    <span>Password:</span>
    <input type="password" name="password">
    <br>
    <span>Code:</span>
    <input type="text" name="captcha">
    <img src="captcha.php">
    <br>
    <input type="submit" value="login">
</form>

<?php
$error = 0;

if (isset($_GET['error'])) {
    $error = $_GET['error'];
}

if ($error == 1) {
    echo "Captcha kod nije tacan";
}

if ($error == 2) {
    echo "Pogresno korisnicko ime ili lozinka";
}

if ($error == 3) {
    echo "Korisnik nije ulogovan";
}

?>
</body>
</html>