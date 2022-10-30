<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 66</title>
</head>

<body>
<pre>
<?php
$web_search = ""; // array();
if (isset($_POST["web_search"]))
    $web_search = $_POST["web_search"];

var_dump($_POST);
//var_dump($_POST['web_search']);
// AND !empty($web_search)
if (is_array($web_search)) {
    echo "Your favorite web search pages: <br>";
    foreach ($web_search as $ws) {
        echo $ws;
        echo "<br>";
    }
}
?>
    </pre>
</body>
</html> 
