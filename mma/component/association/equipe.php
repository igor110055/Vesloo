<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipe</title>
    <link rel="stylesheet" href="/mma/css/index.css">
    <link rel="stylesheet" href="/mma/component/association/css/equipe.css">
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
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 7"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="/mma/images/profil.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Pierre-Henri Fontanel</h5>
                            <p>Trésorié</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/mma/images/profil.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Merlin Téodori</h5>
                            <p>Président</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/mma/images/profil.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Rachel Duminil</h5>
                            <p>Adhérente</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/mma/images/profil.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Jarod De Lima</h5>
                            <p>Adhérent</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/mma/images/profil.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Adrien Joly</h5>
                            <p>Adhérent</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/mma/images/profil.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Isaure Jacq</h5>
                            <p>Adhérente & Graphiste</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/mma/images/profil.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Wesley Pigny</h5>
                            <p>Adhérent & Développeur web</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Précédent</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Suivant</span>
                </button>
            </div>
        </div>
        <div class="corps-component info2">
            <p>Vous souhaitez monter un projet ? Rejoindre notre équipe ?</p>
             
            <a class="btn btn-secondary" href="mma-recrutement" role="button">Devenir salarié</a>
            <a class="btn btn-secondary" href="mma-benevole" role="button">Devenir bénévole</a>
            <a class="btn btn-secondary" href="mma-contact" role="button">Contactez-nous</a>

        </div>
        <div class="corps-component info3">
            <p>Un problème ?</p>
            <a class="btn btn-secondary" href="mma-support" role="button">Support</a>
        </div>
    </div>
    <?php
    require_once "../../../header/footer.php";
    ?>
</body>
</html>