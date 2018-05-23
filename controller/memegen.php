<?php

session_start();

$_SESSION['choixImage']=$_GET['id'];
require ('model/model.php');

$image=getImage($_SESSION['choixImage']);
$url=$image['adress'];
$img_choice = $image["adress"];
<<<<<<< HEAD
 $imageView = getImage($_SESSION['choixImage']);
=======


$imageView = getImage($_SESSION['choixImage']);

       $imageView = getImage($_SESSION['choixImage']);
>>>>>>> c31eed51b57f80bdd6d5fd6d81251582ff9f8fcb

var_dump($imageView);

    require('view/memegeneView.php');



