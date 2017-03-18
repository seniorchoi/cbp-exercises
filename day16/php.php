<?php
$user = array(
  'first name' => 'Marie',
  'last name' => 'Beauchamp',
  'year of birth' => 1994
);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1><?php echo 'MY PAGE'; ?></h1>

    <?php echo $user['first name'], ' ', $user['last name']; ?>

<!-- we are in HTML -->
    <?php foreach($user as $key => $value) : ?>

        <!-- we are back in HTML -->
        <li>something</li>

    <?php endforeach; ?>

    <?php if(false) : ?>
        
        <h2>Condition was true</h2>
        <p>Aliquip sit excepteur non mollit laboris. Irure veniam pariatur Lorem duis aliquip. Mollit ex nostrud cillum magna ex aliquip.</p>
    
    <?php elseif(true) : ?>

        <h2>Condition was false</h2>

    <?php endif; ?>




    <?php

    foreach($array as $key => $value)
    {


    }


    ?>

    <?php foreach($array as $key => $value) : ?>

        <!-- this HTML/PHP code happens for each item in the $array -->

    <?php endforeach; ?>
    


</body>
</html>

