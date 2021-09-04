<?php
$bdd = new PDO("mysql:host=tinlanvroot.mysql.db;dbname=tinlanvroot", "tinlanvroot", "19992510068992530Wp");

require_once "../../../modele/newsletter.php";




if (!empty($_POST["email"]))
{
    $email = htmlspecialchars(htmlentities($_POST["email"]));
}

if (verifyDatabase($bdd, $email) == 1)
{
    pushData($bdd, $email);
    setcookie("message-success", "Votre email a bien été enregistré", time() + 5);
}
else
{
    setcookie("message-error", "Votre email est invalide ou déjà utilisé", time() + 5);
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newsletter</title>
    <link rel="stylesheet" href="/mma/css/index.css">
    <link rel="stylesheet" href="/mma/component/infospratiques/css/newsletter.css">
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
        <div class="corps-component newsletter">
            <h1>S'inscrire à la newsletter</h1>
            <form action="/mma/component/infospratiques/php/database.php" method="post">
                <input class="input" name="email" type="email" placeholder="Email@exemple.com">
                <button type="submit" class="btn btn-secondary">Envoyer</button>
            </form>
            <?php
            if (isset($_COOKIE["message-success"]))
                echo "<div class='alert alert-secondary' role='alert'>".$_COOKIE["message-success"]."</div>";
            else if (isset($_COOKIE['message-error']))
                echo "<div class='alert alert-danger' role='alert'>".$_COOKIE["message-error"]."</div>";
            ?>
        </div>
    </div>
    <?php
    require_once "../../../header/footer.php";
    ?>
</body>
</html>