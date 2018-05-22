<?php
function getImages()
{
$bdd = new PDO('mysql:host=localhost;dbname=meme;charset=utf8','root','');
$response = $bdd->prepare("SELECT id, adress FROM img");
$response->fetchAll(PDO::FETCH_ASSOC);
$response->execute();
return $response;
}

function getImage()
{
    $db = new PDO('mysql:host=localhost;dbname=meme;charset=utf8' ,'root''');

    $image = $db->prepare('SELECT id, adress FROM img WHERE id=:id');
    $choix = (int)$_GET['id'];
    $image->bindParam(":id", $choix,PDO::PARAM_INT);
    $image->execute();
    $imageView = $image->fetch(PDO::FETCH_ASSOC);
    $image->closeCursor();
    return $imageView;
}
?>