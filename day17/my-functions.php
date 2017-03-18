<?php

/**
 * returns a movie name based on its unique id
 *
 * does not check if that unique id exists
 * @param integer $unique_id - unique id of the movie
 * @return string - movie name
 */
function get_name($unique_id)
{
    $movie_names = get_names();
    
    return $movie_names[$unique_id];
}

/**
 * returns a movie rating based on its unique id
 *
 * does not check if that unique id exists
 * @param integer $unique_id - unique id of the movie
 * @return decimal - movie rating
 */
function get_rating($unique_id)
{
    $movie_ratings = get_ratings();
        
    return $movie_ratings[$unique_id];
}
