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
                                    WHERE ws_pages.id_page = 1;");

    $titreHomepage = [];
    $articleAffiche = [];
    $logoPlayStore = [];
    $articleAR = [];


    while ($row = mysqli_fetch_assoc($request)) {
        if($row['id_bloc'] == "1"){
            array_push($titreHomepage, $row);
        } else if ($row['id_bloc'] == "2"){
            array_push($articleAffiche, $row);
        } else if ($row['id_bloc'] == "3"){
            array_push($logoPlayStore, $row);
        } else if ($row['id_bloc'] == "4"){
            array_push($articleAR, $row);
        }
        // array_push($homepageArray, $row);
    }

    // echo "<pre>";
    //     print_r($articleAffiche);
    // echo "</pre>";

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

        echo create_title_bloc("FENÊTRE SUR NOTRE HÉRITAGE",
            "page-title flex-center heigt-five-sized",
            "titleHomepage",
            "fade-right");
        echo create_link_image_bloc("images/logo_v3.svg",
                                "logoToHomepageAbout",
                                "?page=homepage",
                                "logoHomepage",
                                "fade-right");
        
    echo '</div>';


    echo create_title_bloc($titreHomepage[0]["content"], 
                    "text-left flex-center page-title",
                    "problem",
                    "fade-up");
    echo '<div class="flex-center articleContainer">';
    echo create_image_title_text_bloc($articleAffiche[0]["content"],
                                "img-center-resp flex-center",
                                $articleAffiche[1]["content"],
                                "text-left flex-center article-title",
                                $articleAffiche[2]["content"],
                                "text-left flex-center",
                                "article flex-start", 
                                "", 
                                "fade-right");
    echo '</div>';
    
    echo create_image_link_download_bloc($logoPlayStore[0]["content"], 
                                    $logoPlayStore[1]["content"],
                                    $logoPlayStore[2]["content"],
                                    "flex-center", 
                                    "playstoreBadge",
                                    "none");
    echo '<div class="flex-center articleContainer">';
    echo create_title_text_image_bloc($articleAR[0]["content"],
                                    "img-center-resp flex-center",
                                    $articleAR[1]["content"],
                                    "text-left flex-center article-title",
                                    $articleAR[2]["content"],
                                    "text-left flex-center",
                                    "article flex-start",
                                    "",
                                    "fade-left");
    echo '</div>';

        echo create_title_bloc("VENEZ NOUS RENCONTRER LE 15 AVRIL À 14H00", 
                        "text-left flex-center little-title",
                        "rencontre",
                        "fade-up");

        echo '<div class="flex-center articleContainer" id="addressContainer">';
            echo '<div id="adress">';
                echo '<h4> Les Papeteries - Image Factory </h4>';
                echo '<h4> 3 Esplanade Augustin Aussedat, </h4>
                    <h4> CRAN GEVRIER, 74960 </h4>';
            echo '</div>';

            echo '<div id="mapContainer" class="flex-center">';
                echo '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2776.1734798930015!2d6.100588516089639!3d45.90784127910882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478b85412d20d46f%3A0xcdf72ac7f7fdadd0!2sLes%20Papeteries%20-%20Image%20Factory!5e0!3m2!1sfr!2sfr!4v1649962778435!5m2!1sfr!2sfr" width="350px" height="262.5px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
            echo '</div>';
        echo '</div>';

?>