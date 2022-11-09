<?php
session_start();

var_dump($_SESSION);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SESSIONS</title>
</head>
<body>
<?php

if (isset($_SESSION["user"]))
    echo "User:" . $_SESSION["user"] . "<br>";
if (isset($_SESSION["pass"]))
    echo "Pass:" . $_SESSION["pass"];

if (isset($_SESSION["user"]) AND isset($_SESSION["pass"]))
    echo "<br>status: Member<br>";
else
    echo "<br>status: Guest<br><br>";

echo "<br>";

//session_destroy();

//$_SESSION = array();
/*$_SESSION['cart'][1]= 12;
$_SESSION['cart'][23]= 2;
$_SESSION['cart'][45]= 1;
$_SESSION['cart'][123]= 22;
*/

unset($_SESSION["cart"]);
unset($_SESSION["user"]);

$_SESSION = array(); 


echo "<p>After delete</p>";

if (isset($_SESSION["user"]))
    echo "User:" . $_SESSION["user"] . "<br>";
if (isset($_SESSION["pass"]))
    echo "Pass:" . $_SESSION["pass"];

if (isset($_SESSION["user"]) AND isset($_SESSION["pass"]))
    echo "<br>status: Member<br>";
else
    echo "<br>status: Guest<br>";

if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}
session_destroy();

?>
</body>
</html>