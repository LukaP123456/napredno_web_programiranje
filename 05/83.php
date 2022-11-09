<?php
date_default_timezone_set('Europe/Belgrade');
/*
 ctrl+shift+i storage

bool setcookie ( string $name [, string $value [, int $expire = 0 [, string $path [, string $domain [, bool $secure = false [, bool $httponly = false ]]]]]] )

name

    The name of the cookie.
value

    The value of the cookie. This value is stored on the clients computer; do not store sensitive information.
Assuming the name is 'cookiename', this value is retrieved through $_COOKIE['cookiename']
expire

    The time the cookie expires. This is a Unix timestamp so is in number of seconds since the epoch.
In other words, you'll most likely set this with the time() function plus the number of seconds before you want it to expire. Or you might use mktime(). time()+60*60*24*30 will set the cookie to expire in 30 days. If set to 0, or omitted, the cookie will expire at the end of the session (when the browser closes).

        Note:
        You may notice the expire parameter takes on a Unix timestamp, as opposed to the date format Wdy, DD-Mon-YYYY HH:MM:SS GMT,
this is because PHP does this conversion internally.

path

    The path on the server in which the cookie will be available on.
If set to '/', the cookie will be available within the entire domain.
If set to '/foo/', the cookie will only be available within the /foo/ directory and all sub-directories such as /foo/bar/ of domain.
The default value is the current directory that the cookie is being set in.

domain

    The domain that the cookie is available to.
Setting the domain to 'www.example.com' will make the cookie available
in the www subdomain and higher subdomains.
Cookies available to a lower domain, such as 'example.com' will be available
 to higher subdomains, such as 'www.example.com'.
Older browsers still implementing the deprecated » RFC 2109 may require a leading .
to match all subdomains.

secure
    Indicates that the cookie should only be transmitted over a secure HTTPS connection from the client.
When set to TRUE, the cookie will only be set if a secure connection exists.
On the server-side, it's on the programmer to send this kind of cookie only on secure connection (e.g. with respect to $_SERVER["HTTPS"]).

httponly

    When TRUE the cookie will be made accessible only through the HTTP protocol.
This means that the cookie won't be accessible by scripting languages, such as JavaScript.
It has been suggested that this setting can effectively help to reduce identity theft through XSS attacks (although it is not supported by all browsers), but that claim is often disputed. Added in PHP 5.2.0. TRUE or FALSE

 */

setcookie("language", "english", time() + 3600);
setcookie("language_login", "english", time() + 60 * 60 * 24 * 30);
setcookie("TestCookie0", "value", time() - 3600);
setcookie("test", "yes", time() + 120);
setcookie("TestCookie", "something", strtotime('+30 days'));
setcookie("cookie['one']", "1", time() + 120);
setcookie("cookie['two']", "2", time() + 120);
setcookie("cookie['three']", "3", time() + 120);
setcookie("secure1", "OK", time() + 120, "/", "", 0, 1);
setcookie("securePHP", "OK", time() + 120, "/07/", "", 0, 1);
setcookie("secure2", "OK", time() + 120, "/", "", 1, 1);

/*if(count($_COOKIE) > 0) {
    echo "Cookies are enabled.";
} else {
    echo "Cookies are disabled.";
}
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>COOKIE</title>
</head>
<body>
<?php
if (isset($_COOKIE['language']))
    echo "1. cookie - " . $_COOKIE['language'] . "<br>";

if (isset($_COOKIE['TestCookie']))
    echo "2. cookie - " . $_COOKIE['TestCookie'] . "<br>";

echo "<hr>";

var_dump($_COOKIE);
unset($_COOKIE["language"]);
var_dump($_COOKIE);
unset($_COOKIE);

/*

https://www.php.net/manual/en/function.setcookie

 Parameter 	Description
name 	Required. Specifies the name of the cookie

value 	Optional. Specifies the value of the cookie

expire 	Optional. Specifies when the cookie expires.
The value: time()+86400*30, will set the cookie to expire in 30 days.
If this parameter is omitted or set to 0,
the cookie will expire at the end of the session (when the browser closes). Default is 0

path 	Optional. Specifies the server path of the cookie. If set to "/",
the cookie will be available within the entire domain.
If set to "/php/", the cookie will only be available within the php directory
and all sub-directories of php.
The default value is the current directory that the cookie is being set in

domain 	Optional. Specifies the domain name of the cookie. To make the cookie available
on all subdomains of example.com,
set domain to "example.com". Setting it to www.example.com will make the cookie
only available in the www subdomain

secure 	Optional. Specifies whether or not the cookie should only be transmitted over
a secure HTTPS connection.
TRUE indicates that the cookie will only be set if a secure connection exists.
Default is FALSE

httponly 	Optional. If set to TRUE the cookie will be accessible only through the
HTTP protocol
(the cookie will not be accessible by scripting languages).
This setting can help to reduce identity theft through XSS attacks. Default is FALSE

 */
?>
<script>
    console.log(document.cookie);
</script>
</body>
</html>