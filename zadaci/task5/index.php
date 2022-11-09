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

if(isset($_GET['m'])){
    echo "Please submit the form using the submit button";
}

?>

<form action="check.php">
    <label for="name">Name</label><br>
    <input type="text" id="name" name="name"><br><br>
    <label for="password" >Password</label><br>
    <input type="password" id="password" name="password">
    <input type="submit" name="submit">
    <input type="reset" name="reset">
</form>

</body>
</html>