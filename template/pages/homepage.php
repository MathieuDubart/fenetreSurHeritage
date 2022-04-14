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
    
    echo create_image_link_bloc($logoPlayStore[0]["content"], 
                                    $logoPlayStore[1]["content"],
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

?>