<?php

namespace article;

/**
 * a page of an article
 */
class page
{
    protected $page_nr = null;

    public function __construct($page_nr)
    {
        $this->page_nr = $page_nr;
    }

    public function render()
    {
        echo '<h2>Page '.$this->page_nr.'</h2>';
        echo '<p>This is the text of page '.$this->page_nr.' of the article</p>';
    }
}