<?php

require('lib/data-functions.php');

$movies = get_index();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List</title>
</head>
<body>
    
    <ul>

        <?php foreach($movies as $id => $title) : ?>

            <li class="movie">
                <a href="detail.php?id=<?php echo $id; ?>"><?php echo $title; ?></a>
                <a href="form.php?id=<?php echo $id; ?>">edit</a>
            </li>

        <?php endforeach; ?>

    </ul>

</body>
</html>