<?php

// require functions that get ALL the data
require_once('functions.php');
// get_names()
// get_ratings()

// require functions that get just data for a specific id
require_once('my-functions.php');
// get_name()
// get_rating()

//isset($_GET['id']); // true if key 'id' exists within $_GET

if(isset($_GET['id']))
{
    // get id from the URL's GET parameters
    $unique_id = $_GET['id'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo isset($unique_id) ? get_name($unique_id) : '404: page not found'; // echo name based on the unique id ?></title>
</head>
<body>

    <nav>
        <a href="list.php">A list of movies</a>
    </nav>


    <?php if(isset($unique_id)) : ?>
        
        <h1><?php echo get_name($unique_id); // echo name based on the unique id ?></h1>

        <div class="rating">
            Rating: <strong><?php echo get_rating($unique_id); // echo rating based on the unique id ?></strong>
        </div>

    <?php else : ?>

        Sorry, page not found.

    <?php endif; ?>


</body>
</html>