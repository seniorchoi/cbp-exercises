<?php

require_once 'page.php';
require_once 'request.php';

require_once 'libraries/articles/article.php';
require_once 'libraries/articles/page.php';
require_once 'client_request.php';


request::dump();

$page = new page();
$page->render();

$client_request = new client\request();
echo $client_request->getText();

const BAR = 321;

use libraries\article\article;
use function libraries\article\strlen;

var_dump(BAR);

var_dump(strlen('Hello'));

$article = new article('The greatest article there ever was');
$article->addPage(1);
$article->addPage(2);
$article->addPage(3);
$article->addPage('Juch');
$article->render();


use libraries\users\User_interface;
use libraries\users\User;

$user = new User();