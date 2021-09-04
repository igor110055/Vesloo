<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation</title>
    <link rel="stylesheet" href="/mma/css/index.css">
    <link rel="stylesheet" href="/mma/css/donation.css">
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
        <div class="corps-component info1">
            <p>
                Vous pouvez donner via la cagnotte leetchi ou bien donner physiquement de l'argent ou du matériel.
                Il existe plusieurs niveaux de donation:
                <ul>
                    <li>Donateur: 1 euro ou plus</li>
                    <li>Contributeur: 10 euros ou plus</li>
                    <li>Adhérent: 100 euros ou plus</li>
                    <li>Organisateur: 1000 euros ou plus</li>
                </ul>
                <p>Les paiements en Cryptomonnaies seront bientôt disponibles</p>
            </p>
        </div>
        <div class="corps-component info2">
            <a class="leetchi-widget" href="https://www.leetchi.com/widget/fr/57gXRPY5">Participer à la cagnotte en ligne</a>
            <script src="https://www.leetchi.com/Widget/Script.js"></script>
        </div>
    </div>
    <?php
    require_once "../../header/footer.php";
    ?>
</body>
</html>