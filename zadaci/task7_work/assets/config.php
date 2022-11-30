<?php
$metas = [
    'index.php' => [
        ['name' => 'description', 'content' => 'Web Tutorials'],
        ['name' => "keywords", 'content' => 'HTML, CSS, JavaScript'],
        ['name' => 'author', 'content' => 'Mark M'],
        ['charset' => 'UTF-8'],
        ['http-equiv' => 'X-UA-Compatible', 'content' => 'IE=edge']
    ]
];

$links = [
    "Home" => ['class' => 'active', 'href' => 'index.php', 'title' => 'home page'],
    "About us" => ['href' => 'aboutus.php', 'title' => 'about us'],
    "Contact" => ['href' => 'contact.php', 'title' => 'contact us']
];

$linksHeader = [
    ['rel' => 'stylesheet', 'href' => 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'],
    ['rel' => 'stylesheet', 'href' => 'https://fonts.googleapis.com/css?family=Roboto']
];
