<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

define('MYSQL_HOST', 'localhost');
define('MYSQL_USER', 'root');
define('MYSQL_PASSWORD', 'password');
define('MYSQL_DATABASE', 'task4');

$mysql = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DATABASE);

$badWords =  ['drop', 'delete', 'kill', 'destroy', 'fool', 'buta', 'hulye', 'huje', 'blyat', 'mösöcö'];
