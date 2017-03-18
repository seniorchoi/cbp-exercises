<?php

require_once 'q2.php'; // class addres
require_once 'q4.php'; // class delivery

$address1 = new address(array(
    'street' => 'Schorbachstrasse',
    'city' => 'Butzbach',
    'postal_code' => '35510',
    'country' => 'de'
));

$address2 = new address(array(
    'name' => 'Rahim Henderson',
    'street' => 'Diam Rd.',
    'house_nr' => 5037,
    'city' => 'Daly City',
    'country' => 'us',
    'postal_code' => '90255'
));

$address3 = new address(array(
    'name' => 'Czech Post',
    'street' => 'Prujezdna',
    'house_nr' => 9,
    'city' => 'Praha',
    'country' => 'cz',
    'postal_code' => '22599'
));

$address4 = new address(array(
    'street' => 'Kordačova',
    'house_nr' => 2912,
    'city' => 'Kladno',
    'country' => 'cz',
    'postal_code' => '27204'
));

address::setLocalCountry('cz');

for($i = 1; $i <= 4; $i++)
{
    $variable_name = 'address'.$i;

    //var_dump($$variable_name);

    var_dump($$variable_name->getCity());
    var_dump($$variable_name->isLocal());
}

$delivery_to_prague = new delivery($address3);

var_dump($delivery_to_prague->getPrice());


$delivery_to_usa = new delivery($address2);

var_dump($delivery_to_usa->getPrice());

$address_array = array(
    'name' => 'Rahim Henderson',
    'street' => 'Diam Rd.',
    'house_nr' => 5037,
    'city' => 'Daly City',
    'country' => 'us',
    'postal_code' => '90255'
);
$my_address = new address($address_array);
$my_delivery = new delivery($my_address);
$my_delivery->send();
$my_delivery->delivered('2017-02-20 09:00:00');

var_dump($my_delivery);