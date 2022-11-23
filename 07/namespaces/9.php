<?php
require_once 'autoload.php';

use User as U;
//use Database as D;

$user = new U\User('php 8');
$register = new U\Register('now');
$db = new Database\Db();

var_dump($user, $register, $db);
