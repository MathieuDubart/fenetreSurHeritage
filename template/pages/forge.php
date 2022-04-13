<?php
    if (!$connection){
        //Si la connexion n'a pas été effectué
        die ("Connection impossible");
    }
    else {
        // $requete=mysqli_query($connection,"SELECT * FROM ws_bloc LIMIT 3");
    }

    
    echo '<div id="contentContainer">
            <div id="videoContainer" class="draggable">
                <video id="background-video" autoplay loop muted playsinline>
                    <source src="https://assets.codepen.io/6093409/river.mp4" type="video/mp4">
                </video>
                <div class="el"></div>';
        echo '</div>';
    echo '</div>';

    echo '<div id=text-container>';
    // echo create_empty_bloc("empty-bloc", "forgeEmptyBloc", "none");
    
    echo create_text_bloc("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                            "text-left flex-center seven-zero-sized",
                            "text1Forge", 
                            "fade-right");

    echo create_text_bloc("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                            "text-right flex-center seven-zero-sized",
                            "text2Forge", 
                            "fade-left");
    echo create_text_bloc("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                            "text-left flex-center seven-zero-sized",
                            "text3Forge", 
                            "fade-right");

    echo create_text_bloc("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                            "text-right flex-center seven-zero-sized",
                            "text4Forge", 
                            "fade-left");
    echo create_text_bloc("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                            "text-left flex-center seven-zero-sized",
                            "text5Forge", 
                            "fade-right");

    echo create_text_bloc("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                            "text-right flex-center seven-zero-sized",
                            "text6Forge", 
                            "fade-left");
    echo '</div>';
            


?>

<script src="script/expScript.js"></script>;