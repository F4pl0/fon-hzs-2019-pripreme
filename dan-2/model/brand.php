<?php

function getAllBrands($connection){
    $statement = $connection->prepare("SELECT * FROM car_brands ");
    $statement->execute();

    return $statement->fetchAll();
}

function addBrand($connection, $title){
    $statement = $connection->prepare("INSERT INTO car_brands($title) VALUES $title");
    $statement->execute();
}