<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clubs</title>
    <link rel="stylesheet" href="/mma/css/index.css">
    <link rel="stylesheet" href="/mma/component/activites/css/clubs.css">
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
                <div class="photo club">Photographies</div>
        </div>
        <div class="corps-component info2">
                <div class="film club">Films</div>
        </div>
        <div class="corps-component info3">
                <div class="programmation club">Programmation informatiques</div>
        </div>
        <div class="corps-component info4">
                <div class="art club">Arts</div>
        </div>
    </div>
    <?php
    require_once "../../../header/footer.php";
    ?>
</body>
</html>