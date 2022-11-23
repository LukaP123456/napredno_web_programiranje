<?php
require "src/User/User.php";
//require_once 'autoload.php';

use User\User as User;
//use User as U;

$user = new User('php 8');
//$user = new U\User('php 8');

var_dump($user);
