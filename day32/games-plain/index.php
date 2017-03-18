<?php

$pdo = new PDO(
    'mysql:dbname=games;host=127.0.0.1;charset=utf8',
    'root',
    ''
);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// select all the games
$query = "
    SELECT `game`.*
    FROM `game`
    WHERE 1
";
$stmt = $pdo->prepare($query);

$stmt->execute();

$stmt->setFetchMode(PDO::FETCH_OBJ);

$array_of_objects_from_table_game = $stmt->fetchAll();

// select all the genres
$query = "
    SELECT *
    FROM `game_has_genre`
    INNER JOIN `genre`
        ON `game_has_genre`.`genre_id` = `genre`.`id`
";

$stmt = $pdo->prepare($query); // prepare the query
$stmt->execute(); // run the query
$stmt->setFetchMode(PDO::FETCH_OBJ); // make any fetch call return objects
$objects = $stmt->fetchAll(); // return objects

$genres_by_game = array();
foreach($objects as $object)
{
    if(!isset($genres_by_game[ $object->game_id ])) // if an array of genres for this game_id does not yet exist
    {
        $genres_by_game[$object->game_id] = array(); // create it and initialize as empty array
    }
    // $genres_by_game[$object->game_id] is now an array - empty or already with some items
    $genres_by_game[$object->game_id] [] = $object; // we add a new item into this array

    // $genres_by_game[$object->game_id][] = $object;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Games</title>

    <script
  src="http://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
</head>
<body>
    

    <?php foreach($array_of_objects_from_table_game as $game) : ?>

        <div class="game">
            <div class="image">
                <img src="<?php echo $game->image_url; ?>" />
            </div>
            <div class="info">
                <h2 class="name"><?php echo $game->name; ?></h2>
                <div class="release">Released at: <?php echo $game->released_at; ?></div>
                <div class="genres">

                    <?php foreach($genres_by_game[$game->id] as $genre) : ?>
                        <a href="#"><?php echo $genre->name; ?></a>
                    <?php endforeach; ?>

                </div>
                <div class="description">
                    <?php echo $game->description; ?>
                </div>
                <div class="rating"><?php echo $game->rating; ?>%</div>        
            </div>
        </div>

    <?php endforeach; ?>


</body>
</html>