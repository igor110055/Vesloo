<?php
$bdd = new PDO("mysql:host=tinlanvroot.mysql.db;dbname=tinlanvroot", "tinlanvroot", "19992510068992530Wp");

session_start();

require_once "../../../modele/chat.php";


if (!isset($_SESSION["email"]) || empty($_SESSION["email"]))
{
    header("Location: mma-connexion");
}

if (isset($_POST["pseudo-chat"]) && isset($_POST['message-chat']) 
&& !empty($_POST["pseudo-chat"]) && !empty($_POST["message-chat"]))
{
    $pseudo = htmlentities(htmlspecialchars($_POST["pseudo-chat"]));
    $message = htmlentities(htmlspecialchars($_POST['message-chat']));

    if (strlen($pseudo) <= 255 && strlen($message) <= 1000)
    {
        addMessage($bdd, $pseudo, $message);
        setcookie("chat-success", "Votre message a bien été envoyé", time() + 5);
    }
    else
    {
        setcookie("chat-error", "Votre message ou votre pseudo est trop long", time() + 5);
    }
}
else
{
    setcookie("chat-error", "Certains champs sont vides", time() + 5);
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <link rel="stylesheet" href="/mma/css/index.css">
    <link rel="stylesheet" href="/mma/component/forum/chat.css">
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
            <form action="" method="post">
                <input type="text" name="pseudo-chat" placeholder="pseudo">
                <textarea id="story" name="message-chat" rows="5" cols="33">
                    Tapez votre message ici.
                </textarea><br>
                <input class="btn btn-secondary" type="submit" value="Envoyer">
            </form>
            <?php 
            if (isset($_COOKIE["chat-error"]))
            {
                echo "<div class='alert alert-danger' role='alert'>".$_COOKIE['chat-error']."</div>";
                
            }
            if (isset($_COOKIE["chat-success"]))
            {
                echo "<div class='alert alert-success' role='alert'>".$_COOKIE['chat-success']."</div>";
            }
            ?>
        </div>
        <div class="corps-component messages info2">
            <?php showMessages($bdd); ?>
        </div>
    </div>
    <?php
    require_once "../../../header/footer.php";
    ?>
</body>
</html>