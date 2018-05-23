<?php
require_once 'vendor/autoload.php';

session_start();

$_SESSION['choixImage']=$_GET['id'];

$image=getImage($_SESSION['choixImage']);
$url=$image['adress'];
$img_choice = $image["adress"];


$imageView = getImage($_SESSION['choixImage']);

       $imageView = getImage($_SESSION['choixImage']);
       $loader = new Twig_Loader_Filesystem('view');
       $twig = new Twig_Environment($loader, array(
           'cache' => false,
));


       require('model/model.php');

       $template = $twig->load('memegeneView.php');
       echo $template->render(array());






