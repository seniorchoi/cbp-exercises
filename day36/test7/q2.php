<?php

class address
{
    protected $name = null;
    protected $street = null;
    protected $house_nr = null;
    protected $city = null;
    protected $country = null;
    protected $postal_code = null;

    private $dont_change_me = '!!!!';

    protected static $local_country  = null;

    public static function setLocalCountry($country)
    {
        static::$local_country = $country;
    }

    public function __construct($address_array)
    {
        if(isset($address_array['name'])) $this->name = $address_array['name'];
        if(isset($address_array['street'])) $this->street = $address_array['street'];
        if(isset($address_array['house_nr'])) $this->house_nr = $address_array['house_nr'];
        if(isset($address_array['city'])) $this->city = $address_array['city'];
        if(isset($address_array['country'])) $this->country = $address_array['country'];
        if(isset($address_array['postal_code'])) $this->name = $address_array['postal_code'];
    }

    public function getCity()
    {
        return $this->city;
    }

    public function isLocal()
    {
        // fastest
        return $this->country == static::$local_country;

        // also fine
        if($this->country == static::$local_country)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}