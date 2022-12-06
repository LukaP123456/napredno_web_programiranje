<?php
//TODO:TEKST KLK
//https://people.vts.su.ac.rs/~chole/nwp/dokumenti-dokumentumok/kol_sr_II_II_popravni.pdf

const PARAMS = [
    "HOST" => "localhost",
    "USER" => "root",
    "PASSWORD" => "root",
    "DATABASE" => "gallery",
];

//echo PARAMS['HOST'];

define("FOLDERROUTE", "http://localhost/inteGRISANI_WEB_SISTEMI/klk_vezba/");
define('DIRPATH', 'codes/');

$users = [
    0 => [
        'username' => 'Luka',
        'password' => 'sifra12345',
        'email' => 'luka@gmail.com',
        'status' => 'novice'
    ],
    1 => [
        'username' => 'Marko',
        'password' => 'lozinka12345',
        'email' => 'marko@gmail.com',
        'status' => 'novice'
    ],
    2 => [
        'username' => 'Ivan',
        'password' => 'password12345',
        'email' => 'ivan@gmail.com',
        'status' => 'novice'
    ],
];
