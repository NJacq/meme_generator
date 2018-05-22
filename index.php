<?php

$path = $_SERVER['REQUEST_URI'];
var_dump($path);

    switch ($path){
        case "meme_generator/accueil":
        require('controller/accueil.php');
        break;
        case "meme_generator/choix1":
        require('controller/list.php');
        break;

        case "meme_generator/choix2":
        require('controller/list.php');
        break;
        case "meme_generator/createcré-meme":
            require('controller/image.php');
            break;

    }
