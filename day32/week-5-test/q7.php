<?php

$product_id = null;
$color = null;
$size = null;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>T-shirt</title>
</head>
<body>
    
    <form action="cart.php" method="post">

        <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($product_id); ?>" />

        <input type="radio" name="color" value="blue" <?php if($color=='blue') echo 'checked'; ?> />
        <input type="radio" name="color" value="black" <?php if($color=='black') : ?>checked<?php endif; ?> />
        <input type="radio" name="color" value="red" <?php echo $color=='red' ? 'checked' : ''; ?> />

        <select name="size">
            <option value="S" <?php if($size=='S') echo 'selected'; ?>> S </option>
            <option value="M" <?php if($size=='M') echo 'selected'; ?>> M </option>
            <option value="L" <?php if($size=='L') echo 'selected'; ?>> L </option>
        </select>

        <input type="checkbox" name="checkout" value="1" />

        <input type="submit" value="Submit the form!" />

    </form>

</body>
</html>