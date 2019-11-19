<?php

$db = dbConnect();

$db -> exec(
    statement "CREATE TABLE IF NOT EXISTS car_brand (
        id INTEGER PRIMARY KEY, 
        title VARCHAR(100)
    )"
);

$db->exec(
    
);
/*********************************************
 *           SET INITIAL DATA
 ************************************************/


$carBrands = [
    
]
?>