<?php
function showTopics($bdd)
{
    $query = $bdd->prepare("SELECT * FROM topics");
    $query->execute();

    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    foreach ($result as $values)
    {
        echo "<a class='btn btn-secondary' href='forum-topic'>".$values['sujet']."</a>";
    }
}

function showTopic($bdd)
{
    $query = $bdd->prepare("SELECT * FROM topics");
    $query->execute();

    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    foreach ($result as $values)
    {
        echo "<div class='topic'>
        <div class='sujet'>".$values['sujet']."</div>
        <div class='corps'>".$values['corps']."</div>
        </div>";
        echo "<form action='' method='post'>
        <input name='id-topic' type='hidden' value='".$values['id']."'>
        <input class='btn btn-secondary 'type='submit' value='Supprimer'>
        </form>";
    }
}

function showEachTopic($bdd)
{
    $query = $bdd->prepare("SELECT * FROM topics");
    $query->execute();

    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    foreach ($result as $values)
    {
        echo "<div class='topic'>
        <div class='sujet'>".$values['sujet']."</div>
        <div class='corps'>".$values['corps']."</div>
        </div>";
    }
}

function addTopic($bdd, $id, $topic, $corps)
{
    $query = $bdd->prepare("INSERT INTO topics VALUES (NULL, :id_createur, :sujet, :corps) ");
    $query->execute(array(":id_createur" => $id, ":sujet" => $topic, ":corps" => $corps));
}

function deleteTopic($bdd, $id)
{
    $query = $bdd->prepare("DELETE FROM topics WHERE id=:id");
    $query->execute(array(":id" => $id));
}