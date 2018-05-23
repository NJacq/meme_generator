<?php
require('model/model.php');

require_once 'vendor/autoload.php';

session_start();

$_SESSION['choixImage']=$_GET['id'];



$image=getImage($_SESSION['choixImage']);

$imageView = getImage($_SESSION['choixImage']);

       $imageView = getImage($_SESSION['choixImage']);
       $loader = new Twig_Loader_Filesystem('view');
       $twig = new Twig_Environment($loader, array(
           'cache' => false,
));



       $template = $twig->load('memegeneView.html');
       echo $template->render(array('displayImage'=>$imageView));






