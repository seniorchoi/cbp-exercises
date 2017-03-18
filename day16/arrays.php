<?php

$movies = array(
  'The Shawshank redemption',
  'The Godfather',
  'The Godfather II',
  'Dark Knight', 
  '12 angry men', 
  'Schindler\'s list',
  'Pulp fiction',
  'Lord of the Rings: Return of the King',
  'The good, the bad and the ugly',
  'Fight club'
);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Movies</title>
</head>
<body>

    <ol>
        <?php foreach($movies as $whatever => $movie_name) : ?>
            <li><?php echo $movie_name; ?></li>
        <?php endforeach; ?>
    </ol>

    <ol>
        <?php sort($movies); ?>
        <?php $nr_of_movies = count($movies); // 10 ?>
        <?php for($i = 0; $i < $nr_of_movies; $i++) : ?>

            <li><?php echo $movies[$i]; ?></li>

        <?php endfor; ?>
    </ol>


<?php

$movie_names = array(
  'tt0111161' => 'The Shawshank redemption',
  'tt0068646' => 'The Godfather',
  'tt0071562' => 'The Godfather II',
  'tt0468569' => 'Dark Knight', 
  'tt0050083' => '12 angry men', 
  'tt0108052' => 'Schindler\'s list',
  'tt0110912' => 'Pulp fiction',
  'tt0167260' => 'Lord of the Rings: Return of the King',
  'tt0060196' => 'The good, the bad and the ugly',
  'tt0137523' => 'Fight club'
);
$movie_ratings = array(
  'tt0111161' => 9.2,
  'tt0068646' => 9.2,
  'tt0071562' => 9.0,
  'tt0468569' => 8.9, 
  'tt0050083' => 8.9, 
  'tt0108052' => 8.9,
  'tt0110912' => 8.9,
  'tt0167260' => 8.9,
  'tt0060196' => 8.9,
  'tt0137523' => 8.8
);

?>

<?php asort($movie_names); ?>
<ol>
    <?php foreach($movie_names as $unique_id => $movie_name) : ?>
        <li>
          <?php echo $movie_name; ?> 
          <?php echo $movie_ratings[$unique_id]; ?>
        </li>
    <?php endforeach; ?>
</ol>

<?php asort($movie_ratings); ?>
<ol>
    <?php foreach($movie_ratings as $unique_id => $rating) : ?>
        <li>
          <?php echo $movie_names[$unique_id]; ?> 
          <?php echo $rating; ?>
        </li>
    <?php endforeach; ?>
</ol>

<?php

$messages = array(
  'error' => array('Something went wrong', 'Something went REALLY wrong', 'There is no end to this!'),
  'warning' => array('This is your first warning', 'This is your final warning'),
  'success' => array('Finally, something was successful.')
);

function do_something_risky() {
  // do the risky stuff

  // return new messages
  return array(
    'error' => array(
      'I knew this would happen!',
      'This always happens.'
    ),
    'warning' => array(
      'You should fix this before proceeding'
    ),
    'success' => array()
  );
}

// let's try it
$new_messages = do_something_risky();

require('../day13/var_show.php');

// merge two multidimensional arrays into one
$merged_messages = array();

$merged_messages['error'] = array_merge($messages['error'], $new_messages['error']);
var_show($merged_messages);
$merged_messages['warning'] = array_merge($messages['warning'], $new_messages['warning']);
var_show($merged_messages);
$merged_messages['success'] = array_merge($messages['success'], $new_messages['success']);
var_show($merged_messages);


// foreach($messages as $type => $messages_of_type)
// {
//   foreach($messages_of_type as $message)
//   {
//     $merged_messages[$type][] = $message;
//   }
// }
// foreach($new_messages as $type => $messages_of_type)
// {
//   foreach($messages_of_type as $message)
//   {
//     $merged_messages[$type][] = $message;
//   }
// }
?>

<link rel="stylesheet" href="../day7/css/messages.css" />

<?php foreach($merged_messages as $key => $value) : ?>

  <?php foreach($value as $message_text) : ?>

    <div class="message <?php echo $key; ?>"><?php echo $message_text; ?></div>

  <?php endforeach; ?>

<?php endforeach; ?>




    
</body>
</html>