<?php

class car extends vehicle
{
    protected $wheels_count = 4;

    /**
     * changes the color of a car to the value of the argument
     *
     * @param string $new_color - the color to change the color of the car to
     * @return void
     */
    public function change_color($new_color)
    {
        $this->color = $new_color;
    }
}