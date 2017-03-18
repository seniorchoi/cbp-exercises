<?php

class horse extends vehicle
{
    protected $wheels_count = 0;

    // has the horse been fed?
    protected $is_fed = false;

    /**
     * feed the horse
     */
    public function feed()
    {
        $is_fed; // a new variable
        $this->is_fed; // a property of this object
        
        echo 'Feeding the horse now';
        $this->is_fed = true;
    }
}