<?php

use article\article as art;
use article\page; // use article\page as page;

var_dump(art::class);

class article extends art
{
    public function foo()
    {
        $page = new page(2);
        var_dump($page);
    }
}