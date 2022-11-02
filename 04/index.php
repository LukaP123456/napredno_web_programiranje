<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        #if{
            visibility: hidden;
        }
    </style>
    <title>Document</title>
</head>
<body>
<?php
$errors = [
    1 => 'Error occurred during file upload',
    2 => 'File not uploaded with HTTP request',
    3 => 'File was not uploaded, please try again'
];

if (isset($_GET['error']) and array_key_exists($_GET['error'], $errors)) {
    echo $errors[$_GET['error']];
}

?>

<form method="post" name="upload" action="upload.php" enctype="multipart/form-data">

    <label for="if">File: <img src="upload.png" alt="file" height="40" title="choose file"> </label>

    <input type="file" name="file" id="if" hidden><br><br>
    <input type="submit" name="sb" id="sb" value="upload">
    <input type="reset" name="rb" id="rb" value="cancel">

</form>

</body>
</html>