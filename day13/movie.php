<?php
    require_once('var_show.php');

    $movies_in_the_database = array(
        1 => array(
            'name' => 'Godfather',
        ),
        2 => array(
            'name' => 'Forrest Gump',
        )
    );

    $movie = $movies_in_the_database[$_GET['id']];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forms</title>
</head>
<body>

    <nav>
        <a href="?id=1">Godfather</a><br />
        <a href="?id=2">Forrest</a>
    </nav>

    <h1><?php echo $movie['name']; ?></h1>
    <p>
    Excepteur enim aliquip amet excepteur nulla ea in commodo sint anim proident id ex sit. In commodo adipisicing consectetur laboris ut voluptate nisi ex ea veniam aliquip elit. Anim eu id proident consectetur dolor ut dolore magna cillum Lorem magna adipisicing aliqua exercitation. Cupidatat adipisicing sunt ipsum nostrud anim consequat dolor labore nisi id. Consectetur incididunt eu tempor fugiat laborum. Sint eu consequat esse aliquip. Elit excepteur Lorem esse commodo consectetur eu occaecat commodo.
    </p>

</body>
</html>