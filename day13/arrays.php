<?php

require_once('var_show.php');

$variable = 'Jan';

$fruit = ['Apple', 'Pear', 'Orange'];

$fruit_colors = array(
    'Apple' => 'Red',
    'Pear' => 'Green',
    'Orange' => 'Orange'
);

$fruit_prices = array(
    'Apple' => '10',
    'Pear' => '15',
    'Orange' => '7'
);
//$fruit_prices = array_flip($fruit_prices);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Arrays</title>
</head>
<body>
    
    <?php 

    $keys = array_values($fruit_prices);

    $the_same_array = array_combine(array_keys($fruit_prices), array_values($fruit_prices));

    ?>

    <?php

$cars_i_want = array(
    'Porshe',
    'Ferrari',
    'Aston Martin',
    'Lamborghini',
    'Bugatti'
);

$cars_i_have = array(
    'Ferrari',
    'Lamborghini'
);

$cars_i_dont_have = array_diff($cars_i_want, $cars_i_have);

shuffle($cars_i_dont_have);

$random_car_i_will_buy = array_shift($cars_i_dont_have);


$cars_i_want = array(
    'Porshe' => 2000000,
    'Ferrari' => 2500000,
    'Aston Martin' => 2800000,
    'Lamborghini' => 3500000,
    'Bugatti' => 16000000
);

$cars_my_spouse_wants = array(
    'Smart' => 320000,
    'Mercedes' => 620000,
    'Toyota' => 480000,
    'Ford Mustang' => 1200000
);
$cars_i_cant_stand = array(
    'Smart'
);

$merged = array_merge($cars_i_want, $cars_my_spouse_wants);
var_show($merged);

arsort($merged);
var_show($merged);

$cars_i_can_stand = array_diff_key($merged, array_flip($cars_i_cant_stand));
var_show($cars_i_can_stand);

$names_of_cars_i_can_stand = array_keys($cars_i_can_stand);
var_show($names_of_cars_i_can_stand);

$car_we_will_get = array_pop($names_of_cars_i_can_stand);
var_show($car_we_will_get);

    ?>
    We will get <?php echo $car_we_will_get; ?>

    <hr style="clear: both" />

    <?php 
    echo '<ul>';
    foreach($cars_i_can_stand as $brand => $price)
    {
        echo '<li>Price of ' . $brand . ' is ' . $price . '</li>';

    }
    echo '</ul>';

    ?>

</body>
</html>