<?php

class animal
{
    public function sleep()
    {
        echo 'Falls asleep';
    }
}

class cat extends animal
{
    public function sleep()
    {
        echo 'Purrs';

        parent::sleep(); // prints 'Falls asleep'
    }
}


$oliver = new cat();
$oliver->sleep();