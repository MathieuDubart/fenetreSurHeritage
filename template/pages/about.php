<?php
    if (!$connection){
        //Si la connexion n'a pas été effectué
        die ("Connection impossible");
    }
    else {
        // $requete=mysqli_query($connection,"SELECT * FROM ws_bloc LIMIT 3");
    }

// ############################# LOGO & TITLE #############################
    echo create_link_image_bloc("images/logo_v2.svg",
            "logoToHomepage",
            "?page=homepage",
            "logoHomepage",
            "fade-right");


    echo create_title_bloc("NOTRE PROJET", 
                    "text-left flex-center article-title big-title seven-zero-sized",
                    "mainTitles",
                    "fade-right");

// ################################ CONTENT ###############################
    echo create_image_title_text_bloc("images/aboutTest.jpg",
        "img-center-resp flex-center",
        "SOUS TITRE DE L'ARTICLE",
        "text-left flex-center article-title",
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
        "text-left flex-center",
        "article flex-start", 
        "", 
        "fade-right");

    echo create_title_bloc("RENCONTREZ NOTRE EQUIPE", 
                    "flex-center article-title",
                    "mainTitles",
                    "fade-up");
    echo '<div id="galleryContainer" class="flex-center">';
    echo create_gallery_bloc(["images/aboutTest.jpg", "images/aboutTest.jpg", "images/aboutTest.jpg","images/aboutTest.jpg", "images/aboutTest.jpg", "images/aboutTest.jpg"],
                            ["notre coordinateur de projet", "notre chargée de com'","notre designer UI/UX","nos directrices artistiques","nos motion designers","nos développeurs"],
                            "flex-wrap flex-center",
                            "gallery",
                            "fade-up");
    echo '</div>';
    

    echo create_title_text_image_bloc("images/aboutTest.jpg",
        "img-center-resp flex-center",
        "SOUS TITRE DE L'ARTICLE",
        "text-left flex-center article-title",
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
        "text-left flex-center",
        "article flex-start",
        "",
        "fade-left");


    






?>