<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boutique</title>
    <link rel="stylesheet" href="/mma/css/index.css">
    <link rel="stylesheet" href="/mma/css/billetterie.css">
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2:wght@600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header dimensions">
    <?php
        require_once "../../header/subnavbar.php";
        require_once "../../header/navbar.php";
        require_once "../../header/news.php";
        ?>
    </div>
    <div class="corps dimensions">
        <div class='corps-component info1'>
            <h1>Aucun évènement à venir pour le moment...</h1>
            <p><a class="btn btn-secondary" href="mma-donation" role="button">Donner</a></p>
        </div>
        <div class='corps-component info2'>
            <p>N'hésitez pas à vous  inscrire à notre newsletter pour connaitre nos futures évènements</p>
            <p><a class="btn btn-secondary" href="mma-newsletter" role="button">newsletter</a></p>
        </div>
    </div>
    <?php
    require_once "../../header/footer.php";
    ?>
</body>
</html>