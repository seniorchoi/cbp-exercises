<?php

$movie_name = 'Arrival';

$ratings = array(
    'user642' => 69,
    'user214' => 95,
    'user013' => 82
);

function print_rating($rating)
{
    return $rating . ' %';
}

$user_names = array(
    'user642' => 'Bob',
    'user214' => 'Stuart',
    'user013' => 'Kevin'
);

$user_name = $user_names['user214'];

$key_for_stuart = array_search('Stuart', $user_names);
var_dump($key_for_stuart);

function get_username($user_id)
{
    global $user_names;

    return $user_names[$user_id];
}



function get_username_2($user_id)
{
    $user_names = array(
        'user642' => 'Bob',
        'user214' => 'Stuart',
        'user013' => 'Kevin'
    );

    return $user_names[$user_id];
}


foreach($ratings as $user_id => $rating)
{
    echo get_username($user_id) . ' gave the movie a ' . print_rating($rating) .' rating <br />';
}