<?php

$variable = 'test';
$array = array(
    'value',
    'other_value'
);

var_dump($_SERVER);

//phpinfo(); 
die();

define('IN_PRODUCTION', false);

require 'functions.php';

$my_greeting = "Hello, world!";

//print_greeting();

$first_name = 'Jan';
$surname = 'Polak';
$year_of_birth = 1982;
$height = 186;


// 100 lines of code
$first_name = '';

define('MY_OS', 'Windows 10');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP playground</title>
</head>
<body>
    
    First name: <?php echo $first_name; ?><br />
    Surname: <?php echo $surname; ?><br />
    YOB: <?php echo $year_of_birth; ?><br />
    Height: <?php echo $height; ?>cm<br />

    My OS is: <?php echo MY_OS; ?>


    <?php
        function celsius_to_fahrenheit($celsius)
        {
            $fahrenheit = (9/5) * $celsius + 32;
            return $fahrenheit;
        }
    ?>
    <br />
    Today is <?php echo celsius_to_fahrenheit(-6); ?>&deg; F

    <?php

    $male = true;
    $old = 1;
    $user_is_admin = true;

    function print_is_even($number)
    {
        $result = $number % 2 == 0 ? 'even' : 'odd';

        echo $result;
    }

    $number_to_test = 14;
    ?>
    
    I am a<?php echo $male == true ? ( $old ? 'n old male' : ' young male' ) : 'female'; ?>

    <div class="foo <?php echo $user_is_admin ? 'shown' : 'hidden'; ?>">
        The number <?php echo $number_to_test; ?> is <?php echo print_is_even($number_to_test); ?>
    </div>


</body>
</html>