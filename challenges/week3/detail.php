<?php

require('lib/data-functions.php');

$data = get_data($_GET['id']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detail</title>
</head>
<body>

    <h1><?php echo $data['name']; ?></h1>
    <div class="type">(<?php echo $data['type']; ?>)</div>

    <?php if(isset($data['in_production']) && $data['in_production']) : ?>

        <div class="status">Currently in production</div>

    <?php endif; ?>

    <div class="genre"><strong>Genre:</strong> <?php echo $data['genre']; ?></div>

    <p>
        <strong>Plot:</strong> <?php echo $data['plot']; ?>
    </p>


    
</body>
</html>