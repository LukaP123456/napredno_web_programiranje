<?php
require_once './assets/config.php';
require_once './assets/functions.php';

//require_once 'assets/autoload.php';

require_once './src/Web/Body.php';
require_once './src/Web/Header.php';
require_once './src/Web/Navigation.php';
require_once './src/Web/Html.php';
require_once './src/Web/Footer.php';
require_once './src/Web/Meta.php';

use Web\{Body, Footer, Header, Html, Meta, Navigation};

$body = new Body('first', 'mainPage');
$header = new Header('First page', $linksHeader);
$html = new Html('en');
$navigation = new Navigation($links);
$footer = new Footer('Subotica Tech', true);
$html->renderStart();
$header->renderHeader($metas);
$body->getContent();
$navigation->renderNavigation();
$footer->renderFooter();
$body->renderEnd();
$html->renderEnd();

