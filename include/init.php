<?php

    // ini_set('display_errors', 1);
    // error_reporting(E_ERROR | E_WARNING | E_PARSE);

	session_start();

	$login_fail = 0;

	$connection= mysqli_connect("localhost","root","", "fenetreSurHeritage");
    // $connection= mysqli_connect("kbctervgobelin.mysql.db","kbctervgobelin","B1Dev2022", "kbctervgobelin");
    
    mysqli_set_charset( $connection, 'utf8');


    $pagesArray = [
        "homepage",
        "forge",
        "papeteries",
        "usineDuport",
        "about"
    ];

?>