<?php session_start();

if ($_SESSION["id_user"] == NULL) {
    header("Location: index.php?error=3");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="addWork.php">
    <span>Type:</span>
    <?php

    include("config.php");

    $sql = "SELECT DISTINCT * FROM type";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
            echo '<input type="radio" name="type" value="' . $row["id_type"] . '">' . $row["name"];
        }
    }
    ?>
    <br>
    <span>File</span>
    <input type="file" name="uploadedfile"><br>
    <input type="radio" name="status" value="Windows">defined<br>
    <input type="radio" name="status" value="in progress">in progress<br>
    <input type="radio" name="status" value="Linux">finished<br>
    <input type="text" name="price">Price<br>
    <input type="text" name="comment">Comment<br>
    <input type="date" name="date_start">Date start<br>
    <input type="date" name="date_finish">Date finish<br>
    <input type="submit" value="Submit">


    <?php
    $error = 0;

    if (isset($_GET['error'])) {
        $error = $_GET['error'];
    }

    if ($error == 1) {
        echo "Niste popunili sva polja";
    }

    ?>

</form>

</body>
</html>