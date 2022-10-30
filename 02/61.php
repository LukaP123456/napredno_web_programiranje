<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>php 61</title>
</head>
<body>
<?php

$text = "PHP (recursive acronym for \"PHP: Hypertext Preprocessor\") is a widely-used open source \n";
$text .= "general-purpose scripting language that is especially suited for web development and can be embedded into HTML. \n\n";
$text .= "The best things in using PHP are that it is extremely simple for a newcomer, but offers many advanced features for a professional programmer.";

echo $text;
echo "<hr>";

echo nl2br($text); // \n --> <br />
//echo nl2br($text,false); n --> <br>

function br2nl($string) {
	return str_replace("<br>","\n",$string);
}

echo "<br><br>";

echo br2nl(nl2br($text));

?>
</body>
</html>