<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 62</title>
</head>
<body>
<?php

$text = "PHP (recursive acronym for \"PHP: Hypertext Preprocessor\") is a widely-used open source ";
$text .= "general-purpose scripting language that is especially suited for web development and can be embedded into HTML.";

echo wordwrap($text);
//Wraps a string to a given number of characters using a string break character.

echo "<p>".wordwrap($text, 6, "<br> \n")."</p>";
echo "<p>".wordwrap($text, 6, "<br>\n",true)."</p>";
// the default width = 75
// http://php.net/manual/en/function.wordwrap.php
?>
</body>
</html>