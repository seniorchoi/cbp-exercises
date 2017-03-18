# INNER JOIN
SELECT `imdb_movie`.* # select everything from table imdb_movie
FROM `imdb_movie` # from the table imdb_movie
INNER JOIN `imdb_movie_type` # and join the data from table imdb_movie_type
    # where column id of table imdb_movie_type matches the value
    # of column imdb_movie_type_id in the table imdb_movie
    ON `imdb_movie`.`imdb_movie_type_id` = `imdb_movie_type`.`id`
WHERE `imdb_movie`.`imdb_id` = 13455; # where the id of the movie is 13455


# LEFT JOIN
SELECT * # select everything
FROM `imdb_movie` # from the table imdb_movie
LEFT JOIN `imdb_certification` # and join the data from table imdb_certification
    ON `imdb_movie`.`imdb_certification_id` = `imdb_certification`.`id`
WHERE `imdb_movie`.`imdb_id` = 13455; # where the id of the movie is 13455


# COLUMN ALIASES
SELECT `imdb_movie_has_person`.`description` AS role_name,
    `imdb_person`.`fullname` AS person_name
FROM `imdb_movie_has_person`
LEFT JOIN `imdb_person`
    ON `imdb_movie_has_person`.`imdb_person_id` = `imdb_person`.`id`
WHERE `imdb_movie_has_person`.`imdb_id` = 13455;
