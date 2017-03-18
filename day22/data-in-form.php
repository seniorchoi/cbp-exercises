<?php

if(!empty($_POST))
{
    var_dump($_POST);
}

function print_radio2($input_name, $values, $selected_value)
{
    $html = '';

    // for each $values
    foreach($values as $value => $label)
    {
        $unique_id = $input_name . '_' .htmlspecialchars($value);

        $one_radio_html = 
            '<input type="radio" value="' 
            . htmlspecialchars($value) 
            . '" name="' 
            . $input_name
            . '"'
            . ($value == $selected_value ? ' checked' : '') 
            . ' id="'
            . $unique_id
            . '"'
            . '>';
        $html .= '<label for="' . $unique_id . '">';
        $html .= $one_radio_html;
        $html .= $label . '</label>';
    }

    echo $html;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>A form</title>
</head>
<body>
    
    <form action="" method="post">

        <input type="text" name="text" value="<?php echo htmlspecialchars('Coding'); ?>" placeholder="Write something here" />
<br />
        <textarea name="textarea" ><?php echo htmlspecialchars('Bootcamp'); ?></textarea>
<br />
        <input type="checkbox" name="checkbox" <?php if(true) echo 'checked'; ?> />
        <input type="checkbox" name="checkbox" <?php echo true ? ' checked' : ''; ?> />
<br />
        <?php $radio_value = 2; ?>
        <?php print_radio2('radiobtn', array(1 => 'Some label', 2 => 'Other label'), $radio_value); ?>
        <br />
        <select name="select" >
            <option value="1">One</option>
            <option value="2">Two</option>
        </select>
<br />
        <input type="password" name="password"  />
<br />
        <input type="hidden" name="hidden"  />
<br />
        <input type="file" name="file"  />
<br />
        <input type="datetime-local" name="datetime-local"  />
<br />
        <input type="date" name="date" />
<br />
        <input type="month" name="month">
<br />
        <input type="color" name="color">
<br />

        <input type="submit" value="submit form" />

    </form>


</body>
</html>