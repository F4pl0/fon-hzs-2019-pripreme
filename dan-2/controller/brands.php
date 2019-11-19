<?php

require 'helpers/db.php';
require 'helpers/view.php';
require 'model/brand.php';

$connection = dbConnect();

$statement = $connection->prepare('SELECT * FROM car_brand');
$statement->execute();

$brands = $statement->fetchAll();

?>