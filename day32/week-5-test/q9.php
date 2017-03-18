<?php

define('CURRENCY', 'CZK');

function print_price($price)
{
    switch(CURRENCY)
    {
        case 'CZK':
            $string = $price . ' Kč';
            break;
        case 'USD':
            $string = $price . ' $';
            break;
        default:
        case 'EUR':
            $string = $price . ' €';
            break;
    }

    // return the string
    return $string;
}