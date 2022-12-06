<?php
session_start();
if (isset($_SESSION['id_user'])) {
    echo "Korisnik je prijavljen";
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
require 'config.php';
require 'db_config.php';

$connection = databaseConnect();

function getCategory($connection)
{
    echo '<select name="category" id="category">';

    $sql = "SELECT * FROM category";
    $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            echo '<option value="' . $row['code'] . '">' . $row['name'] . '</option>';
        }
    }
    echo '</select>';

}

if (isset($_GET['e']) AND $_GET['e']==1) {
    echo "Wrong file type";
}

if (isset($_GET['e']) AND $_GET['e']==2) {
    echo "Please uplaod a png file";
}
?>
<form action="addImage.php" method="post" enctype="multipart/form-data">
    <?php getCategory($connection); ?>
    <input type="text" name="opis" id="opis" placeholder="opis fajla">
    <input type="file" name="fajl" id="fajl" accept="image/png">
    <input type="submit" name="submit">
</form>

</body>
</html>