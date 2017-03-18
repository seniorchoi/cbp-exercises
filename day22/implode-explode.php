<?php

implode()
join()

$array_of_numbers = array(
    1, 
    2,
    3, 
    4, 
)

$string = join(',', $array_of_numbers); // '1,2,3,4'

$string = join('</td><td>', $array_of_numbers); // '1</td><td>2</td><td>3</td><td>4'

$array_of_numbers = explode('</td><td>', '1</td><td>2</td><td>3</td><td>4');

array(
    1, 
    2,
    3, 
    4, 
)

$full_name = 'Jan Polak';
$parts = explode(' ', $full_name); // array('Jan', 'Polak')

$ip = '127.0.0.1';
$parts = explode('.', $ip); 