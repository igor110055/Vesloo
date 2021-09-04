<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mma</title>
    <link rel="stylesheet" href="/mma/css/index.css">
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
    <div class="corps dimension">
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
                                    <p><a class="btn btn-secondary" href="mma-contact" role="button">Contactez-nous</a></p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="/mma/images/profil.png" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <p><a class="btn btn-secondary" href="mma-donation" role="button">Devenir donateur</a></p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="/mma/images/profil.png" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <p><a class="btn btn-secondary" href="mma-benevole" role="button">Devenir bénévole</a></p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="/mma/images/profil.png" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <p><a class="btn btn-secondary" href="mma-reseaux" role="button">Réseaux sociaux</a></p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="/mma/images/profil.png" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <p><a class="btn btn-secondary" href="mma-recrutement" role="button">Devenir salarié</a></p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="/mma/images/profil.png" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <p><a class="btn btn-secondary" href="mma-billetterie" role="button">Billetterie</a></p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="/mma/images/profil.png" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <p><a class="btn btn-secondary" href="mma-newsletter" role="button">Newsletter</a></p>
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
            <img src="/mma/images/asso2.png" alt="" class="asso">
        </div>
        <div class="corps-component info3">
            <p>
                Interviews, court-métrage, films et vidéos diverses. <br>
                Organisation d'événements cinématographiques et culturels. <br>
                Organisation de concours de jeunes artistes  <br>
            </p>
            <hr>
            <p>
                Inscrivez-vous sur le site pour avoir accès au forum. <a class="btn btn-secondary" href="mma-inscription">Inscription</a>
            </p>
            <hr>
            <p>
                Inscrivez-vous à la newsletter pour être informé des futurs évènements<a class="btn btn-secondary" href="mma-newsletter">Newsletter</a>
            </p>
        </div>
    </div>
    <?php
    require_once "../../header/footer.php";
    ?>
</body>
</html>