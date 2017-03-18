<?php

class Game_Model extends model
{
    protected static $object_class = 'Game_Object';

    public static function getAllGames()
    {
        $query = "
            SELECT `game`.*
            FROM `game`
            WHERE 1
        ";

        $stmt = db::query($query);

        $objects = static::fetchObjects($stmt);

        return $objects;
    }
}