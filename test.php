<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=meme-generator;charset=utf8' ,'root','');
}
catch(Exception $e){
    die('Erreur:'.$e->getMessage());
}
function listImages(){
    $response = $GLOBALS['bdd']->prepare('SELECT * FROM img');
    $response->excute();
    return $response->fetchAll(PDO::FETCH_ASSOC);

    var_dump(listImages);
}