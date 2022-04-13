<?php
    if (!$connection){
        //Si la connexion n'a pas été effectué
        die ("Connection impossible");
    }
    else {
        // $requete=mysqli_query($connection,"SELECT * FROM ws_bloc LIMIT 3");
    }

    echo create_title_bloc("NOTRE PROJET", 
                    "text-left flex-center article-title big-title seven-zero-sized",
                    "titleAboutPage",
                    "fade-up");

    echo create_image_bloc("images/aboutTest.jpg",
                            "img-center-resp-carre flex-center",
                            "aboutImage1",
                            "none");

    echo create_text_bloc("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                        "text-right flex-center seven-zero-sized",
                        "aboutText1", 
                        "none");



    echo create_image_bloc("images/aboutTest.jpg",
                            "img-center-resp-carre flex-center",
                            "aboutImage2",
                            "none");
    
    echo create_text_bloc("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                        "text-left flex-center seven-zero-sized",
                        "aboutText2", 
                        "fade-right");


    echo create_image_bloc("images/aboutTest.jpg",
                            "img-center-resp-carre flex-center",
                            "aboutImage3",
                            "none");

    echo create_text_bloc("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                        "text-right flex-center seven-zero-sized",
                        "aboutText3", 
                        "fade-left");

    echo create_image_bloc("images/aboutTest.jpg",
                            "img-center-resp-carre flex-center",
                            "aboutImage4",
                            "none");

    echo create_text_bloc("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                        "text-left flex-center seven-zero-sized",
                        "aboutText4", 
                        "none");




?>