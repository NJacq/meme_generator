<?php

require_once 'vendor/autoload.php';


$loader = new Twig_Loader_Filesystem('view');
$twig = new Twig_Environment($loader, array(
    'cache' => false,
));

require('model/model.php');

$template = $twig->load('shareView.html');
echo $template->render(array());
