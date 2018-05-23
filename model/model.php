<?php
function getImages()
{
$bdd = new PDO('mysql:host=localhost;dbname=meme-generator;charset=utf8','root','');
$response = $bdd->prepare("SELECT id, adress FROM img");
$response->fetchAll(PDO::FETCH_ASSOC);
$response->execute();
return $response;
}

function getImage($idimage)
{
    $db = new PDO('mysql:host=localhost;dbname=meme-generator;charset=utf8' ,'root','');

    $image = $db->prepare('SELECT id, adress FROM img');
    $choix = $idimage;
    $image->bindParam(":id", $choix,PDO::PARAM_INT);
    $image->execute();
    $imageView = $image->fetch(PDO::FETCH_ASSOC);
    $image->closeCursor();
    return $imageView;
}
?>