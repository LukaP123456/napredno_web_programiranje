<?php

session_start();

$code = $_POST['code'];

if (($code != $_SESSION["code"]) || !isset($_SESSION["code"]) || empty($_SESSION["code"])) {
    unset($_SESSION["code"]);
    unset($code);
    header("Location:85.php?p=1");
    exit;
} else {
    unset($_SESSION["code"]);
    unset($code);
    echo "You entered correct captcha code!";


}