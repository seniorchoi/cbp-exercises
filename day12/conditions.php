<?php

if(true) 
{
    // this WILL run
}

if(false)
{
    // this will NOT run
}

if(1 == true)
{
    // this WILL run
}

if(1 === true)
{
    // this winll NOT run
}

if(1 === 1)
{
    // this WILL run
}

if(true === true)
{
    // this WILL run
}

if(true != 0)
{
    // this WILL run
}

if(!true)
{
 // will NOT run
}

if(!0)
{
    // will run
}


$height = 155; 
if($height > 180)
{
    echo 'tall';
}
elseif($height > 160)
{
    echo  'average';
}
else
{
    echo 'small';
}

$color = 'red';
switch($color) 
{
    default:
    case 'blue':
        // this will not run for 'red'
        break;
    case 'white':
    case 'red':
        // this WILL run for 'red' and for 'white'
        break;
    case 'yellow':
        // this will not run for 'red'
        break;
}

define('MY_OS', 'Windows');

switch(MY_OS)
{
    case 'Windows':
        echo 'Edge';
        break;
    case 'Linux':
        echo 'Firefox';
        break;
    case 'OSX':
        echo 'Safari';
        break;
    default:
        echo 'Just use Chrome';
        break;
}

$age = 34;
$gender = 'male';
$employed = true;

if($age > 35) {}
if($employed) {}
if($age <= 18) {}
if($age < 12 && $gender == 'female') {}
if($age >= 18 && !$employed) {}
if($age >= 60 && $employed && $gender == 'female') {}
if(($gender == 'male' && $age > 20) || (!$employed && $gender == 'female' && $age > 25)) {}