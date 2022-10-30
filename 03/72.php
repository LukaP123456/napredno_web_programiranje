<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 72</title>
</head>

<body>

<?php

$words = $_POST['words'];

//echo "<b>words:</b> $words <br><br>\n";
//echo "<b>Nl2br:</b> " . nl2br($words) . " <br><br>\n";
//echo "<b>Htmlspecialchars:</b> " . htmlspecialchars($words) . " <br><br>\n";
//echo "<b>Htmlentities:</b> " . htmlentities($words) . " <br><br>\n";
echo "<b>Striptags:</b> " . strip_tags($words, "<b><u><i>") . " <br><br>\n";
//echo "<b>Stripslashes:</b> " . stripslashes($words) . " <br><br>\n";
//echo "<b>Addslashes:</b> " . addslashes($words) . " <br><br>\n";

/*

\\
 	"

echo "\"";
*/

$words = strtolower($words);
$words = str_replace("drop", "", $words);
$words = str_replace("crypt", "", $words);
$words = str_replace("select", "", $words);
$words = str_replace("delete", "", $words);
$words = str_replace("insert", "", $words);
$words = str_replace("from", "", $words);
$words = str_replace("table", "", $words);


echo "<b>SQL FILTER:</b> $words";
echo "<br><br>";
$new = htmlspecialchars("<a href='test.html'>Test</a>", ENT_QUOTES); // " and '
echo "\n <br>ENT_QUOTES-" . $new; // &lt;a href=&#039;test.html&#039;&gt;Test&lt;/a&gt;
$new2 = htmlspecialchars("<a href='test.html'>Test</a>", ENT_NOQUOTES); // nothing
echo "\n <br>ENT_NOQUOTES" . $new2; // &lt;a href='test.html'&gt;Test&lt;/a&gt;
$new3 = htmlspecialchars("<a href='test.html'>Test</a>", ENT_COMPAT); // only "
echo "\n <br>ENT_COMPAT" . $new3; // &lt;a href='test.html'&gt;Test&lt;/a&gt;


/*

htmlspecialchars

'&' (ampersand) becomes '&amp;'
'"' (double quote) becomes '&quot;' when ENT_NOQUOTES is not set.
"'" (single quote) becomes '&#039;' only when ENT_QUOTES is set.
'<' (less than) becomes '&lt;'
'>' (greater than) becomes '&gt;' 

htmlentities() function is identical to htmlspecialchars() in all ways, 
except with htmlentities(), all characters which have HTML character entity equivalents 
are translated into these entities. 

stripslashes
 	Returns a string with backslashes stripped off. (\' becomes ' and so on.) Double backslashes (\\) are made into a single backslash (\).

addslashes
    Quote string with slashes

strip_tags($string,"<b><u><i>");

*/

?>
</body>
</html>