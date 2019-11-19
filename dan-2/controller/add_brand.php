<?php

require 'helpers/view.php';
require '   ';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $connection = dbConnect();

    $title = $_POST['title'];

    $statement = $connection->prepare('INSERT INTO car_brand(title) VALUES $title');
    $statemne->execute(['title' => $title]);

    header('Location: /brands');
}

render('add_brand');

?>