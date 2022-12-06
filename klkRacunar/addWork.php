<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
<?php

session_start();

if ($_SESSION["id_user"] == NULL) {
    header("Location: index.php?error=3");
}

include("config.php");

if (isset($_POST["type"]) AND isset($_FILES["uploadedfile"]) AND isset($_POST["status"]) AND isset($_POST["price"]) AND isset($_POST["comment"]) AND isset($_POST["date_start"]) AND isset($_POST["date_finish"])) {
    $type = strip_tags($_POST["type"], '<b><i>');
    $file = $_FILES["uploadedfile"]["tmp_name"];
    $status = strip_tags($_POST["status"], '<b><i>');
    $price = strip_tags($_POST["price"], '<b><i>');
    $comment = strip_tags($_POST["comment"], '<b><i>');
    $date_start = strip_tags($_POST["date_start"], '<b><i>');
    $date_finish = strip_tags($_POST["date_finish"], '<b><i>');

    if (exif_imagetype($file) == 2) {
        echo "Image type is jpg";
    } else {
        echo "Image type is not jpg";
    }

    $rnd_name = mt_rand(2000, 3000);
    $new_file_name = "id_user-" . time() . "-" . $_SESSION["id_user"] . "-" . $rnd_name;
    $directory = "works";
    $upload = "$directory/$new_file_name";

    if (!is_dir($directory))
        mkdir($directory);

    if (move_uploaded_file($file, $upload)) {
        echo "Upload of $file was successful!";
    }

    $sql = "INSERT INTO work(id_type, image, date_start, date_finish, price, comment, status) VALUES('$type', '$new_file_name', '$date_start', '$date_finish', '$price', '$comment', '$status')";
    mysqli_query($connection, $sql) or die (mysqli_error($connection));

    $sql = "SELECT work.id_work, work.image, work.date_start, work.date_finish, work.price, work.comment, work.status, type.name 
            FROM work INNER JOIN type ON work.id_type = type.id_type ORDER BY work.date_start DESC";

    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo '<table style="border:1px solid #000">';
        echo '<tr><th>Id word</th><th>Type</th><th>Image</th><th>Date start</th><th>Date finish</th><th>Price</th><th>Comment</th><th>Status</th></tr>';
        while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
            echo '<tr>';
            echo '<td>'.$row['id_work'].'</td>';
            echo '<td>'.$row['name'].'</td>';
            echo '<td><img src="works/'.$row['image'].'" alt="work '.$row['id_work'].'"></td>';
            echo '<td>'.$row['date_start'].'</td>';
            echo '<td>'.$row['date_finish'].'</td>';
            echo '<td>'.$row['price'].'</td>';
            echo '<td>'.$row['comment'].'</td>';
            echo '<td>'.$row['status'].'</td>';
            echo '</tr>';
        }
        echo '</table>';
    }

    echo '<p><a href="newWork.php">Back to new work</a></p>';

} else {
    header("Location: newWork.php?error=1");
}

?>
</body>
</html>