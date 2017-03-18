<?php

require_once('functions.php');
require_once('my-functions.php');
// get_names()
// get_ratings()
// get_name()
// get_rating()

$unique_id = 'tt0108052';

// some way to get ALL the unique_ids there are
$all_the_names = get_names();

$ids_of_movies = array_keys($all_the_names);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>A list of movies</title>
</head>
<body>

    <h1>A list of movies</h1>

    <?php foreach($ids_of_movies as $unique_id) : ?>

        <h2><?php echo get_name($unique_id); ?></h2>

        <div class="rating">
            Rating: <strong><?php echo get_rating($unique_id); ?></strong>
        </div>

        <!-- using PHP generate an URL address like 'movie.php?id=tt0071562' -->
        <a href="movie.php?id=<?php echo $unique_id; ?>">Detail of the movie</a>

        <?php

        // generating a query string from an array of data
        $data_to_pass = array(
            'id' => $unique_id,
            'foo' => 'bar',
            'foo2' => 'bar2'
        );

        $query_string = http_build_query($data_to_pass);
        var_dump($query_string);
        
        ?>
        <!-- using the query string generated with http_build_query -->
        <a href="movie.php?<?php echo $query_string; ?>">Detail of the movie (generated query string)</a>

    <?php endforeach; ?>


</body>
</html>