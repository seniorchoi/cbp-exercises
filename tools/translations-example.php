<?php

$translations = array(
    'cz' => array(
        'hp-greeting' => 'Ahoj'
    ),
    'en' => array(
        'hp-greeting' => 'Hello'
    )   
);

if(isset($_GET['lang']) && $_GET['lang']=='en')
{
    $trans = $translations['en'];
}
else
{
    // default
    $trans = $translations['cz'];
}

function l($key, $default = null)
{
    global $trans;

    return isset($trans[$key]) ? $trans[$key] : $default;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1><?php echo l('hp-greeting', 'Ahoj'); ?></h1>

    <a href="?lang=en">EN</a>
    <a href="?">CZ</a>
</body>
</html>