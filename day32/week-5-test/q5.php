<?php

// the variables are deliberately initialized with null so that you don't think about their current values
// their current value can be any number
$price = null;
$in_stock = null;
$on_sale = null;
$max_price = null;
$amount_wanted = null;

if(
    (($price) <= ($max_price) || $on_sale)
    && $in_stock >= $amount_wanted
    && $amount_wanted > 0
    )
{
    // code to run
}
?>