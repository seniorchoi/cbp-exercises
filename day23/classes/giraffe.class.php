<?php

class giraffe extends animal
{
    public static $list_of_giraffes = array();

    public static function getNumberOfGiraffes()
    {
        return count(static::$list_of_giraffes);
    }

    public static function getNumberOfGiraffesAtLocation($location)
    {
        $number = 0;

        foreach(static::$list_of_giraffes as $giraffe)
        {
            if($giraffe->location == $location)
            {
                $number++;
            }
        }

        return $number;
    }

    public $is_thirsty = true;

    public $is_hungry = true;

    public $name = 'Micky';

    public $surname = 'Polak';

    public $location = 'forest';

    public function __construct($name, $location = 'forest')
    {
        // storing the new giraffe in the list of giraffes
        static::$list_of_giraffes[] = $this;

        // set the name the giraffe was born with
        $this->name = $name;

        // set the location where it was born as the current location
        $this->location = $location;
    }

    public function __toString()
    {
        return $this->name;
    }

    public function canItFly()
    {
        if($this->can_fly)
        {
            echo 'It can fly!';
        }
        else
        {
            echo 'It cannot fly :-(';
        }
    }

    public function drink()
    {
        if($this->location == 'pond')
        {
            $this->is_thirsty = false;
        }
        else
        {
            echo 'Nothing to drink here!';
        }
    }

    public function eat()
    {
        if($this->location == 'forest')
        {
            $this->is_hungry = false;
        }
        else
        {
            echo 'Nothing to eat here!';
        }
    }

    public function sleep()
    {
        $this->is_thirsty = true;
        $this->is_hungry = true;
    }

    public function goToLocation($location)
    {
        $this->location = $location;
    }

    /**
     * DEPRECATED
     */
    public function go_to_forest()
    {
        $this->goToLocation('forest');
    }

    /**
     * DEPRECATED
     */
    public function go_to_pond()
    {
        $this->goToLocation('pond');
    }

    public function getLocationName()
    {
        switch($this->location)
        {
            case 'forest':
                return 'in the forest';
                break;
            case 'pond':
                return 'at the pond';
                break;
            case 'zoo':
                return 'at the ZOO';
                break;
            default:
                return 'lost!';
                break;
        }
    }
}