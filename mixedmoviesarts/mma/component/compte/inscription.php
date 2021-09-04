<?php
$bdd = new PDO("mysql:host=tinlanvroot.mysql.db;dbname=tinlanvroot", "tinlanvroot", "19992510068992530Wp");

// $bdd = new PDO("mysql:host=localhost;dbname=tinlanvroot", "root", "root");


require_once "../../../modele/accounts.php";





if (isset($_POST["account-email"]) && isset($_POST["account-pseudo"]) && isset($_POST["account-password"]))
{
    $email = htmlentities(htmlspecialchars($_POST["account-email"]));
    $pseudo = htmlentities(htmlspecialchars($_POST["account-pseudo"]));
    $password = htmlentities(htmlspecialchars(password_hash($_POST["account-password"], PASSWORD_DEFAULT)));
    
    if (preg_match("/^([\w\.]+)@((?:[\w]+\.)+)([a-zA-Z]{2,4})/i", $email) && preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/", $password))
    {
        if (verifyAccount($bdd, $email))
        {
            addAccount($bdd, $email, $pseudo, $password);
            setcookie("account-success", "Votre compte a bien été créé", time() + 5);
            header("Location: mma-connexion");
        }
        else
        {
            setcookie("account-error", "L'adresse mail est déjà utilisée", time() + 5);
        }
    }
}






session_start();
if (isset($_SESSION["email"]))
{
    header("Location: mma-home");
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="/mma/css/index.css">
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
        <div class="corps-component">
            <h2>Inscription</h2>
            <form action="" method="post">
                <input name="account-pseudo" type="text" placeholder="Pseudo">
                <input name="account-email" type="email" placeholder="email@exemple.fr">
                <input name="account-password" type="password" placeholder="Password123">
                <input class="btn btn-secondary" type="submit" value="Inscription">
            </form>
                <?php
                if (isset($_COOKIE['account-error']))
                {
                    echo "<div class='alert alert-danger'>".$_COOKIE['account-error']."</div>";
                }                
                ?>
        </div>
    </div>
    <?php
    require_once "../../../header/footer.php";
    ?>
</body>
</html>