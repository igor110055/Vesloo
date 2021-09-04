<?php
$bdd = new PDO("mysql:host=tinlanvroot.mysql.db;dbname=tinlanvroot", "tinlanvroot", "19992510068992530Wp");

// $bdd = new PDO("mysql:host=localhost;dbname=tinlanvroot", "root", "root");



session_start();

require_once "../../../modele/accounts.php";


if (!isset($_SESSION['email']))
{
    header("Location: mma-connexion");
}
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compte</title>
    <link rel="stylesheet" href="/mma/css/index.css">
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2:wght@600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
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
        <div class="corps-component div1">
            <form action="" method="post">
            <?php
            if (!isset($_SESSION["email"]))
            {
                header("Location: mma-connexion");
            }
            else
            {
                showAccount($bdd, $_SESSION["email"]);
                if (isset($_POST['email']) && !empty($_POST['email']))
                {
                    $id = getAccountId($bdd, $_SESSION["email"]);
                    updateEmail($bdd, $_POST["email"], $id);
                    $_SESSION["email"] = $_POST["email"];
                }
                if (isset($_POST['pseudo']) && !empty($_POST['pseudo']))
                {
                    $id = getAccountId($bdd, $_SESSION["email"]);
                    updatePseudo($bdd, $_POST["pseudo"], $id);
                }
            }
            ?>
                <input class='btn btn-secondary' type="submit" value="Modifier">
            </form>
        </div>
    </div>
    <?php
    require_once "../../../header/footer.php";
    ?>
    <script src="/js/index.js"></script>
</body>
</html>