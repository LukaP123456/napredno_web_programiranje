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
    <input type="button" value="submit">
</form>


<?php

// This function grabs the definition of a word in JSON format.
function grab_json_definition($word, $ref, $key): false|string
{
    $uri = "https://dictionaryapi.com/api/v3/references/" . urlencode($ref) . "/json/" . urlencode($word) . "?key=" . urlencode($key);

    return file_get_contents($uri);
}


$jdef = grab_json_definition("apple", "sd2", "66eb45b6-7305-4d31-aeae-09ea236d9c69");


var_dump(json_decode($jdef));
//var_dump($jdef[0])

?>

</body>
</html>