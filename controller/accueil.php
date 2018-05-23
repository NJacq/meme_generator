<?php
//twig: copier coller de la documentation de twig pour developpeurs
require_once 'vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('view');
$twig = new Twig_Environment($loader, array(
    'cache' => false,
));

require('model/model.php');

$template = $twig->load('accueilView.html');
echo $template->render(array());





?>