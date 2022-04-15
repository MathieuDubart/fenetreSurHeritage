<?php
     $error404 = true;

    if(!isset($_GET["page"])){
        // echo "<div id='homePage'>";
        require "template/pages/homepage.php";
        $error404 = false;
        // echo "</div>";
    }else{
        foreach($pagesArray as $key => $page){
            if($page == $_GET["page"]){
                // require "template/pages/".$page.".php/";
                // echo dirname (__FILE__);
                require dirname (__FILE__)."/../pages/".$page.".php";

                $error404 = false;
            }
        }
    }

    //Affichage de la page error404
    if($error404 == true){
        require dirname (__FILE__)."/../pages/"."404.php";
    }
?>