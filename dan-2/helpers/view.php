<?php

$array = [
    'name' => 'Jan',
    'name2' => 'Bojana'
];

function render($name, array $variables = [] ) {
    extract($variables);
    include 'templates/ ' . $name . '.php';
}