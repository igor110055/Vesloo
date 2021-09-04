<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benevole</title>
    <link rel="stylesheet" href="/mma/css/index.css">
    <link rel="stylesheet" href="/mma/component/association/css/benevole.css">
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2:wght@600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header dimensions">
    <?php
        require_once "../../../header/subnavbar.php";
        require_once "../../../header/navbar.php";
        require_once "../../../header/news.php";
        ?>
    </div>
    <div class="corps dimensions">
        <div class="corps-component info1">
            <h1>Devenez bénévole de Mixed Movies Arts</h1>
            <p>N'importe qui peut devenir bénévole de notre association.</p>
            <p>Il suffit de télécharger et de remplir le formulaire ci-contre et de nous l'envoyer rempli par mail.</p>
        </div>
        <div class="corps-component info2">
            <a class="btn btn-secondary" href="/mma/telechargement/exemple.txt" download="exemple.txt" role="button">Exemple</a>
        </div>
    </div>
    <?php
    require_once "../../../header/footer.php";
    ?>
</body>
</html>