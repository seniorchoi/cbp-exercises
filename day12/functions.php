<?php

function get_current_year()
{
    return date('Y');
}

function print_current_year()
{


    echo get_current_year();
}

function render_page($page_file) {



    include 'upper-content.php';
        
    include $page_file;

    include 'lower-content.php';
}

function print_greeting()
{
    global $my_greeting;

    echo $my_greeting;
}

/**
 * dump & die
 */
function dd($variable)
{
    var_dump($variable);
    die();
}

?>