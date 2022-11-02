<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload task</title>
    <style>
        #if {
            display: none;
        }
    </style>
</head>
<body>
<form method="post" name="upload" action="upload.php" enctype="multipart/form-data">

    <label for="if"><img src="upload-file.png" alt="file" title="Choose file" height="40"> </label>

    <input type="file" name="file" id="if" ><br><br>

    <input type="submit" name="sb" id="sb" value="upload">
    <input type="reset" name="rb" id="rb" value="cancel">

</form>
<?php

    $errors = [
            1 => 'Error occurs during file upload!',
            2 => 'File is not uploaded with HTTP request!',
            3 => 'File was not uploaded, please try again!'
    ];


    if(isset($_GET['error']) and array_key_exists($_GET['error'],$errors)) {
        echo $errors[$_GET['error']];
    }

?>
</body>
</html>