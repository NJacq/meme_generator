<?php


session_start();

$loader = new Twig_Loader_Filesystem('view');
$twig = new Twig_Environment($loader, array(
    'cache' => false,
));


require('model/model.php');

$template = $twig->load('choixbddView.html');
echo $template->render(array());



