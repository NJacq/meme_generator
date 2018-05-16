<?php

function getImages()

{

$bdd = new PDO('mysql:host=localhost;dbname=generator_meme;charset=utf8' ,'root','');

$response = $bdd->prepare("SELECT adress FROM img");
$response->fetchAll(PDO::FETCH_ASSOC);
$response->execute();
return $response;

}

?>