<?php

'?product_id=321&color=blue&size=XL'

$data = array(
    'product_id' => 321
    'color' => 'blue',
    'size' => 'XL'
);
$query_string = http_build_query($data); // 'product_id=321&color=blue&size=XL'

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Eshop - home</title>
</head>
<body>

    <h1>Home</h1>

    <a href="product.php?product_id=321&color=blue&size=XL">Blue t-shirt (XL)</a>
    <a href="product.php?<?php echo $query_string; ?>">Blue t-shirt (XL)</a>

</body>
</html>