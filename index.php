<?php

//Rounting

if (isset($_GET['action'])){

switch ($_GET['action']) {

//routeur

case 'accueil':
require_once('controller/accueil.php');
break;

case 'choix':
require_once('controller/choixView.php');

break;

case 'visualisation':
require_once('controller/generVis.php');

break;

case 'generateur':
require_once('controller/memegen.php');

break;

case 'list':
require_once('controller/list.php');

break;





default:

require_once('error.html');


}
} else {
require_once('controller/accueil.php');
}

?>