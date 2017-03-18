<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
<ul>

    <?php for($i = 10; $i > 0; $i--) : ?>
        <?php if($i < 3) break; ?>
        <?php if($i == 7) continue; ?>

        <li>List item nr. <?php echo $i; ?></li>

    <?php endfor; ?>
</ul>

</body>
</html>
