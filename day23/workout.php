<?php

$course_name = 'Coding Bootcamp';

$my_name = 'Jan';

$result = 11-3;

$instructors = array(
    'Jan',
    'Daniel',
    'Michal',
    'Jakub'
);

function greet_me()
{
    echo 'Good morning Prague!';
}

greet_me();

$my_greeting = 'Good morning ' . $my_name;

echo $my_greeting;

sort($instructors);

foreach($instructors as $name)
{
    echo greet_someone($name);
}

function greet_someone($name)
{
    return 'Good morning '.$name;
}