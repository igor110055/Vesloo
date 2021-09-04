<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendrier</title>
    <link rel="stylesheet" href="/mma/css/calendrier.css">
    <link rel="stylesheet" href="/mma/css/index.css">
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2:wght@600&display=swap" rel="stylesheet">
</head>
<body>
<?php
        require_once "../../header/subnavbar.php";
        require_once "../../header/navbar.php";
        require_once "../../header/news.php";
        ?>
    <style>
        .datetime {
            background-color:darkgrey;
            color: #4d4d4d;
        }
    </style>
    <div class="container">
        <div class="datetime">
            <p>Compétition <a href="tinlan-home"><strong>TINLAN</strong> Tournament</a></p>
            <p>Du vendredi 17 à 20h au dimanche 19 juillet à 23h - 2021</p>
            <p><a href="/mma/tinlan/component/tinlan-boutique">Billetterie</a></p>
            <img src="/mma/images/calendar.png" alt="Cette image ne peut pas s'afficher...">
        </div>
    </div>
    <?php
    require_once "../../header/footer.php";
    ?>
</body>
</html>