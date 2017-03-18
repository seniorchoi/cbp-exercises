<?php

$calling_codes = array(
    'AR' => '+54',
    'CZ' => '+420',
    'DE' => '+49',
    'HU' => '+36',
    'US' => '+1'
);

$country_names = array(
    'US' => 'USA',
    'HU' => 'Hungary',
    'CZ' => 'Czechia',
    'AR' => 'Argentina',
    'DE' => 'Germany',
    'DK' => 'Denmark',
    'IN' => 'India'
);

foreach($calling_codes as $key => $value) 
{
    echo 'The calling code of '.$country_names[$key].' is '.$value.'<br>';
}