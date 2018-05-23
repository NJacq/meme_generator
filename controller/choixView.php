<?php

require_once 'vendor/autoload.php';

session_start();
require_once 'vendor/autoload.php';
$loader = new Twig_Loader_Filesystem('view');
$twig = new Twig_Environment($loader, array(
    'cache' => false,
));


require('model/model.php');

$images=getImages();

$template = $twig->load('choixbddView.html');
echo $template->render(array('list'=>$images));



