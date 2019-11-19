<?php



function dbConnect(){
    return new PD0('sqlite:cars.sqlite3');
}

?>