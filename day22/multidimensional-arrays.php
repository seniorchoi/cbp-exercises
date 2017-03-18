<?php

/*

boolean
string
number
array
object

 */

$array = array(
    0 => 'Something went wrong',
    1 => 'Something went REALLY wrong',
    2 => 'There is no end to this!'
),

foreach($array as $value)
{

}


$messages = array(
  'error' => array(
    'Something went wrong',
    'Something went REALLY wrong',
    'There is no end to this!'
  ),
  'warning' => array(
    'This is your first warning',
    'This is your final warning'
  ),
  'success' => array(
    'Finally, something was successful.'
  )
);

foreach($messages as $message_type => $messages_of_type)
{

    typeof $messages_of_type; // == array

    foreach($messages_of_type as $numeric_key => $message_text)
    {

        $numeric_key; // number

        $message_text; // string


    }
}



$messages = array(
  'error' => array(
    'Something went wrong',
    'Something went REALLY wrong',
    'There is no end to this!'
  ),
  'warning' => array(
    'This is your first warning',
    'This is your final warning'
  ),
  'success' => array(
    'Finally, something was successful.'
  )
);

$error_messages = $messages['error'];


$messages['error'][0];

$error_messages[] = 'A new message';

$messages['error'][] = 'A new message';
$messages['warning']
$messages['success']

$messages['info'] = [];
$messages['info'][] = 'A new info message';