<?php
function addMessage($bdd, $pseudo, $message)
{
    $query = $bdd->prepare("INSERT INTO chat VALUES (NULL, :pseudo, :textmessage)");
    $query->execute(array(":pseudo" => $pseudo, ':textmessage' => $message));
}

function showMessages($bdd)
{
    $query = $bdd->prepare("SELECT * FROM chat");
    $query->execute();

    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    foreach ($result as $values)
    {
        echo "<p>".$values['pseudo'].": ".$values['message']."</p>";
    }
}

function showMessagesAdmin($bdd)
{
    $query = $bdd->prepare("SELECT * FROM chat");
    $query->execute();

    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    foreach ($result as $values)
    {
        echo "<p>pseudo: ".$values['pseudo']."</p>";
        echo "<p>message: ".$values['message']."</p>";
        echo "<form action='' method='post'>
        <input type='hidden' name='message-id' value='".$values['id']."'>
        <input type='submit' value='Supprimer'></form>";
    }
}

function deleteMessage($bdd, $id)
{
    $query = $bdd->prepare("DELETE FROM chat WHERE id=:id");
    $query->execute(array(":id" => $id));
}

function deleteAllMessages($bdd)
{
    $query = $bdd->prepare("DELETE FROM chat");
    $query->execute();
}
?>

