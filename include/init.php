<?php

    // ini_set('display_errors', 1);
    // error_reporting(E_ERROR | E_WARNING | E_PARSE);

	session_start();

	$login_fail = 0;

	$connection= mysqli_connect("localhost","root","", "fenetreSurHeritage");

    mysqli_set_charset( $connection, 'utf8');


    $pagesArray = [
        "homepage",
        "forge",
        "papeteries",
        "usineDuport",
        "about"
    ];

?>
