<?php
require('model/model.php');
require_once 'vendor/autoload.php';
session_start();


 $imageView = getImage($_SESSION['choixImage']);
 $pass=str_replace('\\', '/', $_SERVER['DOCUMENT_ROOT'].'/meme_generator/'.$imageView['adress']);
 $createdImage = imagecreatefromjpeg($pass);
 $dimensions = getimagesize($pass);
 // définition des couleurs utilisée
 switch($_POST['color']){
     case 'orange' :
         $color = imagecolorallocate($createdImage, 255, 128, 0);
         break;



     case 'bleu' :
     $color = imagecolorallocate($createdImage, 0, 0, 255);
     break;



     case 'bleuclair' :
     $color = imagecolorallocate($createdImage, 156, 227, 254);
     break;



     case 'noir' :
     $color = imagecolorallocate($createdImage, 0, 0, 0);
     break;



     default :
     $color = imagecolorallocate($createdImage, 255, 255, 255);
     break;

 }
 $font = 'assets/font/Roboto-Black.ttf';

 imagettftext ($createdImage, $_POST['size'], 0, 50, 59, $color, $font, $_POST['txt-edit']);

 // imagestring($createdImage, $_POST['size'], $dimensions[0]/2, 0, $_POST['txt-edit'], $color);
 $droot = $_SERVER['DOCUMENT_ROOT']."/meme_generator/";
 $pct = 'assets/media/tmp/'. time() .".jpg";
 $save = $droot.$pct;

 imagejpeg($createdImage, $save);


 $template = $twig->load('memegeneView.html');
 echo $template->render(array('displayImage'=>$imageView));

 require('view/ttt.php');


