<?php
function destroyEmail($bdd, $id)
{
    $query = $bdd->prepare("DELETE FROM newsletter WHERE (id=:id)");
    $query->execute(array(':id' => $id));
}

function showEmails($bdd)
{
    $query = $bdd->prepare("SELECT * FROM newsletter");
    $query->execute();
    
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($result as $values)
    {
        echo "<div class='profil'>";
        echo "<div class='email'>".$values["email"]."</div>";
        echo "<form action='' method='post'>
        <input name='id-mail' type='hidden' value='".$values['id']."'>
        <input class='btn btn-secondary 'type='submit' value='Supprimer'>
        </form>";  
        echo "</div>";
    }
}

function verifyDatabase($bdd, $email)
{
    $query = $bdd->prepare("SELECT * FROM newsletter");
    $query->execute();

    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    foreach ($result as $values)
    {
        foreach($values as $key => $value)
        {
            if ($email == $value)
            {
                return (0);
            }
        }
    }
    return (1);
}

function pushData($bdd, $email)
{
    $query = $bdd->prepare("INSERT INTO newsletter VALUES (NULL, :email)");
    $query->execute(array(":email" => $email));
}

