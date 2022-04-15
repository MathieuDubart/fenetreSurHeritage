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
                                            WHERE ws_pages.id_page = 4;");

    $logoUsine = [];
    $titreUsine;
    $texte1Usine;
    $texte2Usine;
    $texte3Usine;
    $texte4Usine;

    // $visualizerArray = [];

    while ($row = mysqli_fetch_assoc($request)) {
        if($row['id_bloc'] == "25"){
            array_push($logoUsine, $row);
        } else if ($row['id_bloc'] == "27"){
            $titreUsine = $row['content']; 
        } else if ($row['id_bloc'] == "26"){
            $texte1Usine = $row['content'];
        } else if ($row['id_bloc'] == "28"){
            $texte2Usine = $row['content'];
        } else if ($row['id_bloc'] == "29"){
            $texte3Usine = $row['content'];
        } else if ($row['id_bloc'] == "30"){
            $texte4Usine = $row['content'];
        }
        // array_push($visualizerArray, $row);
    }

    // ############################# LOADING PAGE #############################
    echo '<div class="loadingPage">
            <div class="rightload">
                <img src="video/loading.gif" alt="">
            </div>
        </div>';
    
    echo '<div class="contentContainer">';
            echo '<div class="videoContainer">
                    <video class="background-video" autoplay loop muted playsinline>
                        <source src="video/videos_unity/tissage.webm" type="video/mp4">
                    </video>
                    <div class="el"></div>';
            echo '</div>';
        echo '</div>';
    echo '</div>';

    echo create_link_image_bloc($logoUsine[0]['content'],
    "logoToHomepage",
    $logoUsine[1]['content'],
    "logoHomepage",
    "fade-right");

    echo '<div class=text-container>';
    // echo create_empty_bloc("empty-bloc", "forgeEmptyBloc", "none");
    echo create_text_bloc($titreUsine,
                            "semi-sized big-title exp-title",
                            "forgesTitle",
                            "fade-up");

    echo create_text_bloc($texte1Usine,
                            "text-left flex-center seven-zero-sized desktop-size frame-exp shadow-left",
                            "text1Forge", 
                            "fade-right");

    echo create_text_bloc($texte2Usine,
                            "text-right flex-center seven-zero-sized desktop-size frame-exp shadow-right",
                            "text2Forge", 
                            "fade-left");

    echo create_text_bloc($texte3Usine,
                            "text-left flex-center seven-zero-sized desktop-size frame-exp shadow-left",
                            "text3Forge", 
                            "fade-right");

    echo create_text_bloc($texte4Usine,
                            "text-right flex-center seven-zero-sized desktop-size frame-exp shadow-right",
                            "text4Forge", 
                            "fade-left");

    echo '</div>';


?>

<script src="script/expScript.js"></script>