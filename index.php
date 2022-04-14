<!DOCTYPE html>
<?php
    require 'include/init.php';
    require 'include/functions.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fenêtre sur notre héritage</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/homepage.css">
    <link rel="stylesheet" href="style/responsive.css">
    <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" href="style/footer.css">
    <link rel="stylesheet" href="style/experiences.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" type="image/png" href="/images/porte_orange.svg"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Glegoo:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
</head>
<body>
        <script>
            AOS.init();
        </script>

    <!--                    CONTENT                    -->

    <!-- <div id="content"> -->
        <?php
            require"template/structure/content.php";
        ?>
    <!-- </div> -->

    <!--                    FOOTER                     -->

    <div id="footer">
        <?php
            require"template/structure/footer.php";
        ?>
    </div>
    <script src="script/script.js"></script>
    

    

</body>
</html>