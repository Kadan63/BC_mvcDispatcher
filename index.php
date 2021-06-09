<?php

    switch ($_SERVER['REQUEST_URI']) {
    case '/BC_mvcDispatcher/home':
    include 'view/home.php';
 break;
 case '/BC_mvcDispatcher/catalog':
    include 'view/catalog.php';
    break;
    default: 
    include 'view/404.php';
    break;
 }

?>