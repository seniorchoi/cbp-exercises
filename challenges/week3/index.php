<?php

require_once('lib/data-functions.php');

$data = array(
    'name' => 'Jan Polák',
    'age' => 34,
    'bio' => 'Esse enim do sint ad anim dolore anim laboris tempor ea id. Nulla consequat velit est laboris et anim consequat voluptate veniam labore. Id commodo aliqua do esse pariatur ad aliqua sit officia. Cupidatat sint sit deserunt commodo aute nostrud duis. Eiusmod ea consectetur est qui. Qui deserunt officia ullamco do ad deserunt quis amet officia in excepteur magna enim cupidatat. Ullamco dolore laboris minim quis nostrud et non esse ipsum ad officia exercitation sunt.',
    'male' => true
);

//insert_data($data);


$index = get_index();

var_dump($index);

delete_data(2);
