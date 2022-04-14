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
                                    WHERE ws_pages.id_page = 5;");

    $logoAbout = [];
    $titleAbout = [];
    $articleContexte = [];
    $titleGallery = [];


    while ($row = mysqli_fetch_assoc($request)) {
        if($row['id_bloc'] == "31"){
            array_push($logoAbout, $row);
        } else if ($row['id_bloc'] == "32"){
            array_push($titleAbout, $row);
        } else if ($row['id_bloc'] == "33"){
            array_push($articleContexte, $row);
        } else if ($row['id_bloc'] == "34"){
            array_push($titleGallery, $row);
        }
        // array_push($homepageArray, $row);
    }

// ############################# LOADING PAGE #############################
echo '<div class="loadingPage">
            <div class="rightload">
                <img src="video/loading.gif" alt="">
            </div>
        </div>';

// ############################# LOGO & TITLE #############################
    echo create_link_image_bloc($logoAbout[0]['content'],
            "logoToHomepageAbout",
            $logoAbout[1]['content'],
            "logoHomepage",
            "fade-right");


    echo create_title_bloc($titleAbout[0]['content'], 
                    "text-left flex-center article-title big-title seven-zero-sized",
                    "mainTitles",
                    "fade-right");

// ################################ CONTENT ###############################
    echo '<div class="flex-center articleContainer">';
        echo create_image_title_text_bloc($articleContexte[0]['content'],
            "img-center-resp flex-center cover",
            $articleContexte[1]['content'],
            "text-left flex-center article-title",
            $articleContexte[2]['content'],
            "text-left flex-center",
            "article flex-start", 
            "", 
            "fade-right");
    echo '</div>';

    echo create_title_bloc($titleGallery[0]['content'], 
                    "flex-center article-title",
                    "mainTitles",
                    "fade-up");
    echo '<div id="galleryContainer" class="flex-center">';
    echo create_gallery_bloc(["images/axel.jpg", "images/melisse.jpg", "images/baptiste.jpg","images/DA.jpg", "images/motion.jpg", "images/devs.jpg"],
                            ["notre coordinateur de projet", "notre chargée de com'","notre designer UI/UX","nos directrices artistiques","nos motion designers","nos développeurs"],
                            "flex-wrap flex-center",
                            "gallery",
                            "fade-up");
    echo '</div>';
    
    echo '<div class="flex-center articleContainer">';
        echo create_title_text_image_bloc("images/aboutTest.jpg",
            "img-center-resp flex-center",
            "SOUS TITRE DE L'ARTICLE",
            "text-left flex-center article-title",
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
            "text-left flex-center",
            "article flex-start",
            "",
            "fade-left");
    echo '</div>';

?>