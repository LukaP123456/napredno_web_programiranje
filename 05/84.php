<?php
session_start();

/*
user|s:9:"student23";pass|s:5:"vt2s3";school|s:6:"VTS024";number|i:23;



ini_set('session.use_trans_sid',0);
ini_set('session.use_cookies',1);
ini_set('session.use_only_cookies',1);

or in php.ini

session.use_trans_sid = 0
session.use_cookies = 1
session.use_only_cookies = 1

*/

/*
if(!isset($_SESSION['generated']) OR $_SESSION['generated']< (time()-30))
{
	session_regenerate_id();
	$_SESSION['generated'] = time();
}
*/
//
$_SESSION["user"] = "student23";
$_SESSION["pass"] = "vt2s3";
$_SESSION['school'] = "VTS024";
$_SESSION['number'] = 23;
$_SESSION['email'] = "eee@ggg.com";

//unset($_SESSION['user']);

// user|s:9:"student23";pass|s:5:"vt2s3";school|s:6:"VTS024";number|i:23;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SESSIONS</title>
</head>
<body>
<?php

//echo "<a href=\"84-2.php?".SID."\">link1</a><br />";
echo '<p><a href="84-2.php">link1</a></p>';
echo "Session ID:" . session_id();
echo "<p>Session name:" . session_name() . "</p>";
if (isset($_SESSION['user']))
    echo "User:" . $_SESSION["user"] . "<br>";
echo "Pass:" . $_SESSION["pass"];


?>
</body>
</html>