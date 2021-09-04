<?php
function addAccount($bdd, $email, $pseudo, $password)
{
    $query = $bdd->prepare("INSERT INTO comptes VALUES (NULL, :email, :pseudo, :passwordHashed, 1)");
    $query->execute(array(":email" => $email, ":pseudo" => $pseudo, ":passwordHashed" => $password));
}

function verifyAccount($bdd, $email)
{
    $query = $bdd->prepare("SELECT * FROM comptes");
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

function verifyConnect($bdd, $email, $password)
{
    $query =  $bdd->prepare("SELECT * FROM comptes");
    $query->execute();

    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    foreach ($result as $values)
    {
        if ($values['email'] == $email && password_verify($password, $values['password']))
        {
            return (1);
        }
    }
    return (0);
}

function showAccounts($bdd)
{
    $query = $bdd->prepare("SELECT * FROM comptes");
    $query->execute();

    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    foreach ($result as $values)
    {
        echo "<div class='compte'>
        <div class='email'>Email: ".$values['email']."</div>
        <div class='pseudo'>Pseudo: ".$values['pseudo']."</div>
        <div class='privileges'>Privileges: ".$values['privileges']."</div>
        </div>";
        echo "<form action='' method='post'>
        <input name='id-account' type='hidden' value='".$values['id']."'>
        <input class='btn btn-secondary 'type='submit' value='Supprimer'>
        </form>";
    }
}

function showAccount($bdd, $email)
{
    $query = $bdd->prepare("SELECT * FROM comptes WHERE email=:email");
    $query->execute(array(":email" => $email));

    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    foreach ($result as $values)
    {
        echo "<p class='clickable' id='email'>".$values["email"]."</p>";
        echo "<p class='clickable' id='pseudo'>".$values["pseudo"]."</p>";
        echo "<p>privileges : ".$values["privileges"]."</p>";
    }
}

function deleteAccount($bdd, $id)
{
    $query = $bdd->prepare("DELETE FROM comptes WHERE id=:id");
    $query->execute(array(":id" => $id));
}

function getAccountId($bdd, $email)
{
    $query = $bdd->prepare("SELECT id FROM comptes WHERE email=:email");
    $query->execute(array(":email" => $email));

    $result = $query->fetchAll(PDO::FETCH_ASSOC);


    foreach ($result as $values)
    {
        return $values['id'];
    }
}

function updateEmail($bdd, $email, $id)
{
    $query = $bdd->prepare("UPDATE comptes SET email = :email WHERE id = :id");
    $query->execute(array(":email" => $email, ":id" => $id));
}

function updatePseudo($bdd, $pseudo, $id)
{
    $query = $bdd->prepare("UPDATE comptes SET pseudo = :pseudo WHERE id = :id");
    $query->execute(array(":pseudo" => $pseudo, ":id" => $id));
}
?>