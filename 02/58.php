<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 58</title>
</head>
<body>
<?php
$email = "webmaster@something.rs";

echo "email = $email <br>";

$domain_temp = strstr($email, "@"); // @something.rs
//Returns part of haystack string starting from and including the first occurrence of needle to the end of haystack.
// Note: This function is case-sensitive. For case-insensitive searches, use stristr().

var_dump($domain_temp);

$domain = substr($domain_temp, 1);
echo "domain = $domain <br>";

$domain_temp = strchr($email, "@"); //Alias of strstr()
$domain = substr($domain_temp, 1);
echo "domain = $domain <br>";

?>
</body>
</html>