<?php

require_once 'vendor/autoload.php';

session_start();

$loader = new Twig_Loader_Filesystem('view');
$twig = new Twig_Environment($loader, array(
    'cache' => false,
));


require('model/model.php');

$template = $twig->load('choixbddView.php');
echo $template->render(array());



