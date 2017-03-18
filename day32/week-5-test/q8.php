<?php

require 'functions.php';

// get the information from POST
$product_id = $_POST['product_id'];
$color = $_POST['color'];
$size = $_POST['size'];
$amount = $_POST['amount'];
$checkout = $_POST['checkout'];

// in theory: check the values for errors

// get the product in stock (using the POST)
$product_in_stock = amount_in_stock($_POST['product_id'], $_POST['color'], $_POST['size']);

// get the product in stock (using the variables that we prepared)
$product_in_stock = amount_in_stock($product_id, $color , $size);

// if there is enough product
if($product_in_stock >= $amount)
{
    // add product to cart
    add_to_cart($product_id, $color, $size, $amount);
    
    if($checkout)
    {
        // redirect to checkout.php
        header('Location: checkout.php');
    }
}
else
{
    // add the error
    add_error('We are sorry. Not enough items in stock.');

    // redirect to home.php
    header('Location: home.php');
}