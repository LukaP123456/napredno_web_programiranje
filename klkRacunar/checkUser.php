<?php
session_start();

include "config.php";

$username = mysqli_real_escape_string($connection, $_POST["username"]);
$password = mysqli_real_escape_string($connection, $_POST["password"]);
$captcha = mysqli_real_escape_string($connection, $_POST["captcha"]);

if ($captcha != $_SESSION["captcha"]) {
    header("Location: index.php?error=1");
    exit();
}

$password = password_hash($password, PASSWORD_BCRYPT);

$sql = "SELECT id_user,email FROM user WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
        $_SESSION["id_user"] = $row["id_user"];
        $_SESSION["email"] = $row["email"];
    }

    setcookie("login", sha1(time() + (3 * 24 * 60 * 60)), time() + 900,"","","",true);

    $message = "Computer task";
    $header = "";
    $header .= "From: <student@vts.su.ac.rs>\n";
    $header .= "X-Mailer: PHP\n";
    $header .= "X-Priority: 1\n";
    $header .= "Content-Type: text/html; charset=UTF-8\n";
    $to = $_SESSION['email'];
    $subject = "Korisnik " . $_SESSION['id_user'] . " is logged into the system!";
    mail($to, $subject, $message, $header);

    $currentDate = date("Y-m-d H:i:s");
    echo $currentDate;

    $sql = 'UPDATE user SET $date_last_login=' . $currentDate . ' WHERE id_user = ' . $_SESSION["id_user"] . '';
    $result = mysqli_query($connection, $sql);

    header("Location: newWork.php");
    exit();
} else {
    header("Location: index.php?error=2");
    exit();
}

?>