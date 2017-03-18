<?php 

class Game_Object 
{
    public function getShortDescripton()
    {
        return mb_substr($this->description, 0, 200, 'utf-8').'...';
    }
}