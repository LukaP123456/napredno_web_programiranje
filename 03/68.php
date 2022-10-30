<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 68</title>
</head>

<body>
<?php

$comment = "";

if (!empty($_POST['comment'])) {
    $comment = $_POST['comment'];
}

$comment = nl2br($comment); // \n =><br />
//$comment = nl2br($comment,false); // \n =><br>
echo "Your comment: $comment <br>";

?>
</body>
</html>
