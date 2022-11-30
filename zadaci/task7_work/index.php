<?php
require_once 'assets/config.php';
require_once 'assets/functions.php';

require_once 'src/Web/Body.php';
require_once 'src/Web/Header.php';
require_once 'src/Web/Navigation.php';
require_once 'src/Web/Html.php';
require_once 'src/Web/Footer.php';
require_once 'src/Meta/Meta.php';

use Web\{Body, Footer, Header, Html, Navigation};
use Meta\Meta;

$currentPage = getCurrentPage();

$body = new Body('first', 'mainPage');
$header = new Header('First page', $linksHeader);
$html = new Html('en');
$navigation = new Navigation($links);
$footer = new Footer('Subotica Tech', true);
$meta = new Meta($metas[$currentPage]);

$html->renderStart();
$header->renderStart();
$header->renderTitle();
$meta->renderMetaTags();
$header->renderLinks();
$header->renderEnd();
$body->renderStart();
$navigation->renderNavigation();
$footer->renderStart();
$footer->renderContent();
$footer->renderEnd();
$body->renderEnd();
$html->renderEnd();







