<?php
$bdd = new PDO("mysql:host=tinlanvroot.mysql.db;dbname=tinlanvroot", "tinlanvroot", "19992510068992530Wp");

// $bdd = new PDO("mysql:host=localhost;dbname=tinlanvroot", "root", "root");

session_start();

require_once "../../../modele/accounts.php";




if (isset($_POST['email']) && isset($_POST['password']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    if (preg_match("/^([\w\.]+)@((?:[\w]+\.)+)([a-zA-Z]{2,4})/i", $email))
    {
        if (verifyConnect($bdd, $email, $password) == 1)
        {
            $_SESSION['email'] = $email;
            header("Location: mma-home");
        }
        else
        {
            setcookie("auth-error", "votre email ou votre mot de passe est invalide", time() + 5);
        }
    }
    else
    {
        setcookie("email-error", "votre email est invalide", time() + 5);
    }
}

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
    <title>Connexion</title>
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
        <div class="corps-component">
        <h2>Connexion</h2>
        <?php
        if (isset($_COOKIE["account-success"]))
        {
            echo "<div class='alert alert-success'>".$_COOKIE["account-success"]."</div>";
            
        }
        if (isset($_COOKIE["auth-error"]))
        {
            echo "<div class='alert alert-danger'>".$_COOKIE["auth-error"]."</div>";
        }
        if (isset($_COOKIE["email-error"]))
        {
            echo "<div class='alert alert-danger'>".$_COOKIE["email-error"]."</div>";
        }
        ?>
            <form action="" method="post">
                <input type="email" name="email" placeholder="email.exemple@exemple.com">
                <input type="password" name="password" placeholder="Password">
                <input class="btn btn-secondary" type="submit">
            </form>
        </div>
    </div>
    <?php
    require_once "../../../header/footer.php";
    ?>
</body>
</html>