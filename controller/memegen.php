<?php

session_start();

$_SESSION['choixImage']=$_GET['id'];
require ('model/model.php');

$image=getImage($_SESSION['choixImage']);
$url=$image['adress'];
$img_choice = $image["adress"];


$imageView = getImage($_SESSION['choixImage']);

       $imageView = getImage($_SESSION['choixImage']);

var_dump($imageView);

    require('view/memegeneView.php');



