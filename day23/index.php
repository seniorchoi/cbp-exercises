<?php

// get all the files within classes as an array
$files = scandir('classes');
// go through all the files
foreach($files as $file)
{
    // if the file is a reference to this folder 
    // or the one above, continue
    if($file == '.' ||  $file == '..') continue;

    // if the file is a php file (has .php extension)
    if(pathinfo($file, PATHINFO_EXTENSION) == 'php')
    {
        // require the file
        require_once('classes/' . $file);
    }
}

$rupert = new giraffe('Rupert');
$rupert->go_to_forest();
$rupert->eat();

$berta = new giraffe('Berta', 'pond');
$berta->go_to_forest();

$matt = new giraffe('Matthew', 'zoo');
$matt->go_to_pond();

$berta->go_to_pond();
$rupert->go_to_pond();

$matt->go_to_forest();

$rupert->go_to_forest();

$todd = new giraffe('Todd');

$todd->goToLocation('zoo');
$matt->goToLocation('zoo');
$rupert->goToLocation('zoo');
$berta->goToLocation('zoo');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nature report</title>
</head>
<body>
    <h1>Nature report</h1>
    
    <p>Currently there are <?php echo giraffe::getNumberOfGiraffes(); ?> giraffes in the world.</p>

    <p>
        <?php echo giraffe::getNumberOfGiraffesAtLocation('forest'); ?> of them are in the forest, 
        <?php echo giraffe::getNumberOfGiraffesAtLocation('pond'); ?> are at the pond.
    </p>
    <p><?php echo giraffe::getNumberOfGiraffesAtLocation('zoo'); ?> are at the ZOO</p>

    <p>There is a giraffe called <?php echo $rupert->name; ?>.</p>
    <p>
        It <?php echo ($rupert->is_hungry ? 'is' : 'is not'); ?> hungry 
        and it <?php echo $rupert->is_thirsty ? 'is' : 'is not'; ?> thirsty.
    </p>
    <p>It is <?php echo $rupert->getLocationName(); ?>.</p>

    <p>The giraffes are:</p>
    <ul>
        <?php foreach(giraffe::$list_of_giraffes as $giraffe) : ?>
            <li><?php echo $giraffe; ?> is <?php echo $giraffe->getLocationName(); ?></li>
        <?php endforeach; ?>
    </ul>
    
</body>
</html>