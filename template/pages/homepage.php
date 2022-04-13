<?php
    if (!$connection){
        //Si la connexion n'a pas été effectué
        die ("Connection impossible");
    }
    else {
        // $requete=mysqli_query($connection,"SELECT * FROM ws_bloc LIMIT 3");
    }
    
    // echo '<map name="home_map">
    //     <area shape="rect" coords="318,64,430.74,205.2" href="./forge.php"/>
    //     <area shape="rect" coords="328.66,211,442,336" href="./papeteries.php"/>
    //     <area shape="rect" coords="364.26,527,485.72,702.52" href="./usineDuport.php"/>
    // </map>';

    // echo '<figure style="text-align:center;">
    //     <img usemap="#home_map" src="images/mapFigma.png"/></figure>';

    echo '<div id="background_image_homepage">';
        echo '<img src="images/desktop/mapDesktop.jpg" id="mapImage" alt="background_image_homepage">';
        

        echo '<div id="cadreHomepage">';
        echo '<a href="?page=forge"><div id="forges">
        <img src="images/forgeV2.svg" alt="forges">
    </div></a>';

echo '<a href="?page=papeteries"> <div id="papeteries">
        <img src="images/papeterieV2.svg" alt="papeteries">
    </div></a>';

    

echo '<a href="?page=usineDuport"><div id="usineDuport">
        <img src="images/usineV2.svg" alt="usines Duport">
    </div></a>';
        echo '</div>';

        echo create_title_bloc("FENÊTRE SUR NOTRE HERITAGE",
            "page-title flex-center heigt-five-sized",
            "titleHomepage",
            "fade-right");
        echo create_link_image_bloc("images/logo_v3.svg",
                                "logoToHomepage",
                                "?page=homepage",
                                "logoHomepage",
                                "fade-right");
        
    echo '</div>';


    echo create_title_bloc("Comment renouer avec le passé, entre réabilitation et oubli ?", 
                    "text-left flex-center page-title",
                    "problem",
                    "fade-up");

    echo create_image_title_text_bloc("images/afficheTest.jpg",
                                "img-center-resp flex-center",
                                "Une expérience interactive et nostalgique",
                                "text-left flex-center article-title",
                                "Explication expo : Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                                "text-left flex-center",
                                "article flex-start", 
                                "", 
                                "fade-right");

    // echo create_image_bloc("images/afficheTest.jpg",
    //                     "img-center-resp flex-center",
    //                     "afficheHomepage",
    //                     "fade-up");
    
    // echo create_title_bloc("Une expérience interactive et nostalgique",
    //                 "text-left flex-center article-title",
    //                 "titleAffiche",
    //                 "fade-right");

    // echo create_text_bloc("Explication expo : Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
    //                         "text-left flex-center",
    //                         "textAffiche", 
    //                         "fade-right");


    
    echo create_image_link_bloc("images/store_badge.svg", 
                                    "https://play.google.com/",
                                    "flex-center", 
                                    "playstoreBadge",
                                    "none");

    echo create_title_text_image_bloc("images/afficheTest.jpg",
                                    "img-center-resp flex-center",
                                    "Qu'est ce que la Réalité Augmentée ?",
                                    "text-left flex-center article-title",
                                    "Explication AR : Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                                    "text-left flex-center",
                                    "article flex-start",
                                    "",
                                    "fade-left");


    // echo create_title_bloc("Qu'est ce que la Réalité Augmentée ?",
    //                 "text-left flex-center article-title",
    //                 "titleAR",
    //                 "fade-right");

    // echo create_text_bloc("Explication AR : Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
    //                         "text-left flex-center",
    //                         "textAR",
    //                         "fade-right");

    // echo create_image_bloc("images/afficheTest.jpg",
    //                         "img-center-resp flex-center",
    //                         "imgAR",
    //                         "none");

?>