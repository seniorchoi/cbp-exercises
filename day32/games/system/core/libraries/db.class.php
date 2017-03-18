<?php

/**
 * alows simple running of SQL queries
 * 
 * provides functionality to connect to a database
 * it will use information from config
 */
class db
{
    // connection to the database (object of class PDO)
    protected static $pdo = null;

    /**
     * return the connection object
     */
    public static function pdo()
    {
        // if static::$pdo was not yet created (ie. connected to the db)
        if(static::$pdo===null) {

            // connect to the database
            // store the connection (PDO) into static::$pdo
            try {

                // connect to the database and store connection it the static property
                static::$pdo = new PDO(
                    //'mysql:dbname=database_name;host=locahost;charset=utf8',
                    'mysql:dbname='.config::get('db_name').';host='.config::get('db_host').';charset='.config::get('db_encoding', 'utf8'), 
                    config::get('db_user'),
                    config::get('db_pass')
                );

                // set level of error reporting
                static::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            } catch (PDOException $e) {

                // print out an error if connection fails
                echo 'Connection failed: ' . $e->getMessage();

            }
        }

        return static::$pdo;
    }

    /**
     * run an SQL query and return the result
     */
    public static function query($sql, $substitutions = array())
    {
        // get the PDO object
        $pdo = static::pdo();

        // prepare the statement out of SQL
        $statement = $pdo->prepare($sql);

        // execute the statements (with substitutions)
        $statement->execute($substitutions);

        // return the statement (now containing result set)
        return $statement;
    }
}