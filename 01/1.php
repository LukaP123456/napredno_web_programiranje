<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 1</title>
</head>
<body>
<div id="dva">text</div>
<div id="dd">fdfd</div>

<?php

print "<b>Hello World 1!</b><br>";

echo "\t<b>Hello World 2! </b><br>";

echo "<div id='2'>text</div>\n\r";

echo 'this is PHP course';

echo "";

$variable = 12;

echo "<b>$variable <br> \$variable = $variable</b><br>";
echo '<b>$variable</b>';

echo "<b>" . $variable . "</b>";

echo "
<div id=\"024\">024</div>\n

";

/*

for example:    \"  = "   

\' – To escape ' within single quoted string.
\" – To escape " within double quoted string.
\\ – To escape the backslash.
\$ – To escape $. 
\n – To add line breaks between string (newline)
\t – To add tab space (tabulator)
\r – For carriage return.

*/


echo '<p id="vts">vts</p>';

echo "<p id=\"vts\">vts</p>";


$v = "LUKA PRCIC JE OVO NAPISAO ";

// https://www.php.net/manual/en/language.types.string.php#language.types.string.syntax.heredoc
/*
  A third way to delimit strings is the heredoc syntax: <<<. After this operator, an identifier is provided, then a
newline. The string itself follows, and then the same identifier again to close the quotation.

The closing identifier may be indented by space or tab, in which case the indentation will be stripped from all lines in
 the doc string. Prior to PHP 7.3.0, the closing identifier must begin in the first column of the line.

Also, the closing identifier must follow the same naming rules as any other label in PHP: it must contain only
alphanumeric characters and underscores, and must start with a non-digit character or underscore.
 */


echo <<< LESSON
<div class="col-md-6 hidden-xs hidden-sm">
<div class="logo">
    <a href="https://www.vts.su.ac.rs" title="VTŠ Subotica">
    <img class="logo_image" src="https://www.vts.su.ac.rs/frontend-assets/images/logo.png" alt="logo">
    </a>
    $v
</div>
</div>

LESSON;

echo <<< START
<br>
PHP VTŠ
<b>VTS</b>\n
<br>\n
<i>VTS</i><div title="something">VTS$variable</div>
START;


$version = 8;
// The opening Heredoc identifier may optionally be enclosed in double quotes:
echo <<< "START2"

<div id="start2">PHP version $version \n is good for practice </div>

START2;


$values = [<<<END

a
  b
    c
END, 'd e f'];
var_dump($values);

$title = "VTŠ Subotica";

$variableDoc = <<< "PHP"
<div class="col-md-6 hidden-xs hidden-sm">
<div class="logo">
    <a href="https://www.vts.su.ac.rs" title="$title">
    <img class="logo_image" src="https://www.vts.su.ac.rs/frontend-assets/images/logo.png" alt="logo">
    </a>
    $v
</div>
</div>
PHP;


var_dump($values,$variableDoc);


// https://www.php.net/manual/en/language.types.string.php#language.types.string.syntax.nowdoc
/*
  Nowdocs are to single-quoted strings what heredocs are to double-quoted strings. A nowdoc is specified similarly to a
heredoc, but no parsing is done inside a nowdoc. The construct is ideal for embedding PHP code or other large blocks of
text without the need for escaping. It shares some features in common with the SGML <![CDATA[ ]]> construct, in that it
declares a block of text which is not for parsing.

A nowdoc is identified with the same <<< sequence used for heredocs, but the identifier which follows is enclosed in
single quotes, e.g. <<<'EOT'. All the rules for heredoc identifiers also apply to nowdoc identifiers, especially those
 regarding the appearance of the closing identifier.

 */

echo <<<'EOD'
Example of string spanning multiple lines
using nowdoc syntax. Backslashes are always treated literally,
e.g. \\ and \'.
EOD;

$name = "PHP";
$data = "codes";

echo <<<'EOT'
My name is "$name". I am printing some $data.
Now, I am printing some more $data.
EOT;

echo <<< CSS

Neki string koji sam napisao

CSS;

echo <<< Luka
<h1> drugi put uneto </h1>
Luka;




?>
</body>
</html>