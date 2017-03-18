<?php

class animal
{
    protected $hungry = true;

    public function eat()
    {
        $this->hungry = false;
    }
}

interface mammalInterface
{
    
}

class dog extends animal implements mammalInterface
{
    use domesticated, understandsCommands;
}

class wolf extends animal
{

}

trait domesticated
{
    public $owners_mood = 'unhappy';

    public function beFed()
    {
        $this->hungry = false;

        $this->owners_mood = 'happy';
    }
}

trait understandsCommands
{
    public function fetch()
    {

    }

    public function sit()
    {

    }
}

class baby
{
    protected $hungry = true; // trait expects it

    use domesticated;
}

class soldier
{
    use understandsCommands;
}

$ben = new dog();
$ben->eat();

$fang = new wolf();
$fang->eat();

var_dump($ben);
var_dump($fang);