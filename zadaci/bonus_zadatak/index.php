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

<form action="check.php" method="post">
    <input type="text" name="word">
    <input type="submit" value="submit">
</form>

<p>These are your words:</p>
<?php
$words= json_decode(file_get_contents('https://api.datamuse.com/words?ml=ringing+in+the+ears'));
for ($i = 0; $i <= count($words) - 1; $i++){
    echo $words[$i]->word."<br>";
}
?>

</body>
</html>