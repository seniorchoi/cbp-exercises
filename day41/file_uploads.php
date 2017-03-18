<?php

var_dump($_POST);
echo nl2br(var_export($_FILES, true));

$source_path = $_FILES['uploaded_file']['tmp_name'];

$target_dir = __DIR__ . '/uploads/';

$pathinfo = pathinfo($_FILES['uploaded_file']['name'], PATHINFO_EXTENSION);

// if the extension is not in the array of allowed extensions
if(!in_array($pathinfo, array('jpg', 'jpeg', 'png')))
{
    die('Unallowed file extension');
}

$file_nr = 0;
do
{
    $file_nr++;

    $target_path = $target_dir.$file_nr.'.jpg';
}
while(file_exists($target_path));

/*
$target_path = __DIR__ . '/uploads/' . $_FILES['uploaded_file']['name'];

$target_path = __DIR__ . '/uploads/' . 'beagle.jpg';
*/
move_uploaded_file($source_path, $target_path);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <div class="form">

        <form action="" method="post" enctype="multipart/form-data">

            <input type="text" value="Beagle" name="breed" />

            <input type="file" name="uploaded_file" />

            <input type="submit" value="Upload file! Double time!">            

        </form>

    </div>
    
</body>
</html>