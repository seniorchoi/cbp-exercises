<?php

// page.php?page=2

// get the page nr from URL or use 1
$page_nr = isset($_GET['page']) ? $_GET['page'] : 1;
$items_on_page = 100;

$page_nr = max(1, intval($page_nr)); // cast to integer and at least 1
$offset = $items_on_page * ($page_nr-1);

$query = "
    SELECT `imdb_movie`.*
    FROM `imdb_movie`
    WHERE 1
    LIMIT {$offset}, {$items_on_page}
";

$stmt = $pdo->prepare($query);

$result = $stmt->execute();