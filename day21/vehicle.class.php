<?php

class vehicle
{
    // number of wheels on this vehicle
    protected $wheels_count = null;
    
    // color of this vehicle
    protected $color = null;
    
    // average speed of this vehicle (kmph)
    public $avg_speed = null;
    
    /**
     * calculate the time to travel a specified distance at average speed
     * 
     * @param float $distance - distance to travel in km
     * @return float time to travel in hours
     */
    public function travel($distance)
    {   
        // to handle division by zero (illegal operation)
        $avg_speed = max(1, $this->avg_speed); // returns the bigger value of 1 and $this->avg_speed

        return $distance / $avg_speed;
    }
}