<?php

$data_to_be_returned = array(
    'product_name' => 'Lenovo Yoga',
    'description' => 'A very nice laptop, except for the keyboard.'
);
header("Access-Control-Allow-Origin: *");
echo json_encode($data_to_be_returned);
exit();