<?php

$pattern = '#^page_(\d+)$#i';

$string = 'page_33';

$result = preg_match($pattern, $string, $matches);

var_dump($result);
var_dump($matches);

