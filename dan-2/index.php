<?php
    switch($_SERVER["PATH_INFO"]){
    case "/cars":
        require"controller/cars.php";
        break;
    case "/brands":
        require"controller/brands.php";
        break;
    case "/brands/add":
        require"controller/add_brand.php";
        break;
    }