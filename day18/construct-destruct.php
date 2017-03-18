<?php

$number_of_current_connections = 0;

class connection
{
    public function __construct()
    {
        global $number_of_current_connections;

        $number_of_current_connections++;
    }

    public function __destruct()
    {
        global $number_of_current_connections;

        $number_of_current_connections--;
    }
}


function do_something_in_database()
{
    $conn = new connection();

    // does its stuff in database

    // $conn is destroyed automatically
    // __destruct is called automatically
}

// $conn is destroyed manually
unset($conn); // __destruct is called automatically