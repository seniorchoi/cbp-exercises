<?php

require('lib/data-functions.php');

$errors = array();

// array of default values for each field
$item_data = array(
    'name' => null,
    'plot' => null,
    'in_production' => 1,
    'genre' => null,
    'type' => 'feature'
);


if(!empty($_GET['id'])) // if there is 'id in the URL
{
    $item_data = get_data($_GET['id']); // replace the default empty values with the values form the database
}


if(!empty($_POST))
{
    var_dump('FORM SUBMITTED');

/*
    // making sure that we have either the value sent or a default value
    //------------------------------------------------------------------

    // with a ternary operator
    $name = isset($_POST['name']) ? $_POST['name'] : null;

    // with a condition
    if(isset($_POST['name']))
    {
         $name = $_POST['name'];
    }
    else
    {
        $name = null;
    }
*/

    $item_data = array(
        'name' => isset($_POST['name']) ? $_POST['name'] : null, // with a ternary operator while building the data array
        'plot' => $_POST['plot'],
        'in_production' => $_POST['in_production'],
        'genre' => $_POST['genre'],
        'type' => isset($_POST['type']) ? $_POST['type'] : null,
        'next_part_of' => isset($_POST['next_part_of']) ? $_POST['next_part_of'] : null
    );

    // VALIDATION
    $valid = true;

    if(!isset($item_data['name'])) // if the item 'name' does not appear in $item_data
    {
        $valid = false;
        $errors[] = 'Name was not found';
    }
    elseif(strlen($item_data['name']) == 0) // if it is there BUT is of zero length (ie. '')
    {
        $valid = false;
        $errors[] = 'Name can not be empty';
    }
    elseif(strlen($item_data['name']) > 255) // if it is there and is not of zero length BUT is too long
    {
        $valid = false;
        $errors[] = 'Name is too long ('.strlen($item_data['name']).' characters). Maximum size is 255 characters.';
    }

    $allowed_types = array('feature', 'tv-show');
    if(empty($item_data['type']))
    {
        $valid = false;
        $errors[] = 'Type can not be empty';
    }
    elseif(!in_array($item_data['type'], $allowed_types)) // if it exists but is not one of the allowed values
    {
        $valid = false;
        $errors[] = 'Invalid type value.';
    }

    if($valid) // if everything was valid - there were no errors
    {
        insert_data($item_data);

        header('Location: form.php');
        exit();
    }
}

/*
// echo (ternary operator)
// the ternary operator returns $data_to_save['name'] if it exists, '' otherwise
<?php echo isset($data_to_save['name']) ? $data_to_save['name'] : ''; ?>
*/

function field_value($post_name, $default_value = null)
{
    // using $item_data from the global scope
    global $item_data;

    // in $value put either the item from $_POST (if it is there) or $default_value
    $value = isset($item_data[$post_name]) ? $item_data[$post_name] : $default_value;

    // return the value but ESCAPED
    return htmlspecialchars($value);
}

/**
 * return ' checked' if the item in $_POST exists and equals $value
 */
function checked_if_value($name, $value)
{
    // using $item_data from the global scope
    global $item_data;

    // if the item with key $name exists within $_POST and it's value is $value
    if(isset($item_data[$name]) && $item_data[$name] == $value)
    {
        return  ' checked';
    }
    else
    {
        return '';
    }
}

function selected_if_value($name, $value)
{
    // using $item_data from the global scope
    global $item_data;

    // if the item with key $name exists within $_POST and it's value is $value
    if(isset($item_data[$name]) && $item_data[$name] == $value)
    {
        return  ' selected';
    }
    else
    {
        return '';
    }
}

function print_radio($input_name, $values, $selected_value)
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
    <title>Form</title>
</head>
<body>

    <!-- printing out the errors (if there are any) -->
    <?php foreach($errors as $error_message) : ?>

        <div class="error"><?php echo $error_message; ?></div>

    <?php endforeach; ?>
    
    <form action="" method="post">

        Movie title:<br />
        <input type="text" name="name" value="<?php echo field_value('name', ''); ?>" /><br />
        <br />
        Plot:<br />
        <textarea name="plot"><?php echo field_value('plot', ''); ?></textarea><br />
        <br />
        In production:<br />
        <input type="hidden" name="in_production" value="0" />
        <input type="checkbox" name="in_production" value="1" <?php echo checked_if_value('in_production', 1); ?> /><br />
        <br />
        Genre:<br />
        <select name="genre">
            <option value="" <?php echo selected_if_value('genre', ''); ?>>---</option>
            <option value="action" <?php echo selected_if_value('genre', 'action'); ?>>Action</option>
            <option value="adventure" <?php echo selected_if_value('genre', 'adventure'); ?>>Adventure</option>
            <option value="scifi" <?php echo selected_if_value('genre', 'scifi'); ?>>Sci-fi</option>
        </select>
        <br />
        <br />
        Type:<br />
        <label for="type_feature_radio">
            Feature film:
            <input type="radio" name="type" value="feature" id="type_feature_radio" <?php echo checked_if_value('type', 'feature'); ?> />
        </label>
        <label for="type_tvshow_radio">
            TV show:
            <input type="radio" name="type" value="tv-show" id="type_tvshow_radio" <?php echo checked_if_value('type', 'tv-show'); ?> />
        </label>
        <label for="type_invalid_radio">
            Invalid:
            <input type="radio" name="type" value="invalid" id="type_invalid_radio" <?php echo checked_if_value('type', 'invalid'); ?> />
        </label>
        <br />
        <br />
        Next part of:<br />
        <?php
        $all_movies = get_index();

        print_radio('next_part_of', $all_movies, field_value('next_part_of', null));
        ?>

        <input type="submit" name="save" value="save" />

        <input type="submit" name="save-and-detail" value="save and go to detail" />

    </form>


</body>
</html>