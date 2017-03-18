<?php

$pdo_connection = new PDO(
    'mysql:dbname=eshop;host=127.0.0.1;charset=utf8',
    'Edward',
    'gP59FcV'
);

$statement = $pdo->prepare("
    SELECT `delivery`.*
    FROM `delivery`
    WHERE `delivery`.`id` = ?
");

$all_went_well = $statement->execute([81]);