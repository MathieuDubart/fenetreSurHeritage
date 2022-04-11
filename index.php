<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/responsive.css">
</head>
<body>

    <!--                    HEADER                    -->

    <div id="header">
        <?php
            require"template/structure/header.php";
        ?>
    </div>

    <!--                    CONTENT                    -->

    <div id="content">
        <?php
            require"template/structure/content.php";
        ?>
    </div>

    <!--                    FOOTER                     -->

    <div id="footer">
        <?php
            require"template/structure/footer.php";
        ?>
    </div>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="script/script.js"></script>

</body>
</html>