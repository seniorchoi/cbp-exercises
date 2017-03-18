<?php

class request 
{
    public $get_values = array();

    public $post_values = array();

    public $is_post = false;

    public static $instance = null; // the one object

    public static function getInstance()
    {
        if(static::$instance === null)
        {
            static::$instance = new request();
        }
        return static::$instance;
    }
}

$request = request::getInstance();
$request->get_values = $_GET;

?>

...


<?php

request::getInstance(); // the same object




request::getInstance();
