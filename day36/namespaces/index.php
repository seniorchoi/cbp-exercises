<?php

require_once 'client_request.php';
require_once 'libraries\articles\article.php';
require_once 'libraries\articles\page.php';

require_once 'article.php';
require_once 'page.php';
require_once 'request.php';



// dump request data
request::dump();

// render the entire page
$page = new page();
$page->render();


// render the client's request
$client_request = new client\request();
echo $client_request->getText();



// prepare an article containing pages and render it
$article = new article('The greatest article there ever was');
$article->addPage(1);
$article->addPage(2);
$article->addPage(3);
$article->render();

$article->foo();


require_once 'UserInterface.php';
require_once 'FacebookUser.php';

class TwitterUser implements UserInterface
{
    public function getUsername()
    {

    }

    public function setUsername(string $username)
    {
        
    }
}

function print_user_username(UserInterface $user)
{
    echo $user->getUsername();
}