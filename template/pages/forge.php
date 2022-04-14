<?php
    if (!$connection){
        //Si la connexion n'a pas été effectué
        die ("Connection impossible");
    }
    else {
        // $requete=mysqli_query($connection,"SELECT * FROM ws_bloc LIMIT 3");
    }

    $request = mysqli_query($connection, "SELECT ws_pages.nom_page, ws_bloc.id_bloc, ws_content.content, ws_content.ordre FROM `ws_pages`
                                            LEFT JOIN ws_bloc ON ws_pages.id_page = ws_bloc.id_page
                                            LEFT JOIN ws_content ON ws_bloc.id_bloc = ws_content.id_bloc
                                            WHERE ws_pages.id_page = 2;");

    $logoForge = [];
    $titreForge;
    $texte1forge;
    $texte2forge;
    $texte3forge;
    $texte4forge;

    // $visualizerArray = [];

    while ($row = mysqli_fetch_assoc($request)) {
        if($row['id_bloc'] == "13"){
            array_push($logoForge, $row);
        } else if ($row['id_bloc'] == "14"){
            $titreForge = $row['content']; 
        } else if ($row['id_bloc'] == "15"){
            $texte1forge = $row['content'];
        } else if ($row['id_bloc'] == "16"){
            $texte2forge = $row['content'];
        } else if ($row['id_bloc'] == "17"){
            $texte3forge = $row['content'];
        } else if ($row['id_bloc'] == "18"){
            $texte4forge = $row['content'];
        }
        // array_push($visualizerArray, $row);
    }

    // echo "<pre>";
    // print_r($visualizerArray);
    // echo "</pre>";

    // ############################# LOADING PAGE #############################
    echo '<div class="loadingPage">
            <div class="rightload">
                <img src="video/loading.gif" alt="">
            </div>
        </div>';

    echo '<div class="contentContainer">';
            echo '<div class="videoContainer">
                    <video class="background-video" autoplay loop muted playsinline>
                        <source src="https://assets.codepen.io/6093409/river.mp4" type="video/mp4">
                    </video>
                    <div class="el"></div>';
            echo '</div>';
        echo '</div>';
    echo '</div>';

    echo create_link_image_bloc($logoForge[0]["content"],
                                "logoToHomepage",
                                $logoForge[1]["content"],
                                "logoHomepage",
                                "fade-right");

    echo '<div class=text-container>';
    // echo create_empty_bloc("empty-bloc", "forgeEmptyBloc", "none");
    echo create_text_bloc($titreForge,
                            "semi-sized big-title exp-title",
                            "forgesTitle",
                            "fade-up");

    echo create_text_bloc($texte1forge,
                            "text-left flex-center seven-zero-sized desktop-size frame-exp shadow-left",
                            "text1Forge", 
                            "fade-right");

    echo create_text_bloc($texte2forge,
                            "text-right flex-center seven-zero-sized desktop-size frame-exp shadow-right",
                            "text2Forge", 
                            "fade-left");

    echo create_text_bloc($texte3forge,
                            "text-left flex-center seven-zero-sized desktop-size frame-exp shadow-left",
                            "text3Forge", 
                            "fade-right");

    echo create_text_bloc($texte4forge,
                            "text-right flex-center seven-zero-sized desktop-size frame-exp shadow-right",
                            "text4Forge", 
                            "fade-left");

    
    echo '</div>';


?>

<script src="script/expScript.js"></script>