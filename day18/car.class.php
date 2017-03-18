<?php

class car
{
    private $color = null;

    private $manufacturer = null;

    public $model = null;

    public $price = null;

    public $nr_of_wheels = 4;

    public $fuel_type = 'petrol';

    public $tire_type = null;

    public $owner = 'manufacturer';

    public $current_speed = 0;

    /**
     * this method will be called upon construction of the object
     */
    public function __construct($color, $manufacturer, $model)
    {
        $this->color = $color;
        $this->manufacturer = $manufacturer;
        $this->model = $model;
    }

    /**
     * this method will be called upon destruction of the object (for example at the end of a function)
     */
    public function __destruct() 
    {
        // a car is destroyed
    }

    public function speed_up()
    {
        $this->current_speed += 10;     
    }

    public function brake()
    {
        $this->current_speed -= 10;
    }

    public function get_stolen()
    {
        $this->owner = 'chop-shop';
    }

    public function be_bought($new_owner)
    {
        $this->owner = $new_owner;
    }

    /**
     * a get method for the manufacturer property
     */
    public function getManufacturer()
    {
        // check if the user has permissions to view the manufacturer

        // this method is within the class so it has access to the private property
        return $this->manufacturer;
    }

    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }
}

// no car was made yet


$new_car = new car('red', 'Skoda', 'Favorit'); // a new car is created with the red color
//$new_car->setManufacturer('Skoda'); // it got it's manufacturers mark
//$new_car->model = 'Favorit'; // it got it's brand
//$new_car->setColor('Red'); // it got it's color

echo $new_car->getManufacturer(); // ok

$new_car->price = 400000; // the car is given a price

$new_car->price = 1000000; // the car is on sale

$new_car->be_bought('Jan'); // I buy the car

$new_car->speed_up(); // $new_car->speed == 10
$new_car->speed_up(); // $new_car->speed == 20
$new_car->speed_up(); // $new_car->speed == 30
$new_car->speed_up(); // I sped up to 40 (kmph)

$new_car->brake(); // $new_car->speed == 30
$new_car->brake(); // $new_car->speed == 20
$new_car->brake(); // $new_car->speed == 10
$new_car->brake(); // $new_car->speed == 0 - I stopped

$new_car->get_stolen();

$new_car->nr_of_wheels = 0; // the wheels are chopped off

