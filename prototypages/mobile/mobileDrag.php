<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="./mobileDrag.css">
        <meta charset="utf-8">
        <script src="https://cdn.jsdelivr.net/npm/interactjs/dist/interact.min.js"></script>
    </head>
    <body>
        <?php 
        echo '<div id="container">
        <div id="videoContainer" class="draggable">
            <video id="background-video" autoplay loop muted playsinline>
                <source src="https://assets.codepen.io/6093409/river.mp4" type="video/mp4">
            </video>
            <div class="el"></div>
        </div>
    </div>';
    


       echo ' <div id="test">bonjou je suis du texteuh</div>
        <div id="test2">bonjou je suis du texteuh</div>
        <div id="test3">bonjou je suis du texteuh</div>';

        ?>

        <script src="./mobileScript.js"></script>
    </body>
    </html>