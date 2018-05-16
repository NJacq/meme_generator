<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=meme-generator;charset=utf8' ,'root','');
}
catch(Exception $e){
    die('Erreur:'.$e->getMessage());
}
function listImages(){
    $sql = "SELECT adress FROM img";
    $response = $GLOBALS['bdd']->prepare($sql);
    $response->execute();
   $result = $response->fetchAll(PDO::FETCH_ASSOC);
   var_dump($result);
   return $result;
}
listImages();