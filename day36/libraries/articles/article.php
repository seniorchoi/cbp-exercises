<?php

namespace libraries\article;

function strlen($string)
{
    return 999;
}

/**
 * An article
 */
class article 
{
    protected $title = null;
    protected $pages = array();

    public function __construct($title)
    {
        $this->title = $title;
    }

    public function addPage($page_nr)
    {
        $this->pages[] = new page($page_nr);
    }

    public function render()
    {
        echo '<h1>'.$this->title.'</h1>';

        echo static::class;

        foreach($this->pages as $page)
        {
            echo '<p>'.$page->render().'</p>';
        }
    }
}