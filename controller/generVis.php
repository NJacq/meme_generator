<?php
require('model/model.php');

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
 $font = 'Roboto-Black.ttf';
 imagettftext ($createdImage, $_POST['size'], 0, $dimensions[0]/2, $dimensions[1]/2, $color, $font, $_POST['txt-edit']);

 // imagestring($createdImage, $_POST['size'], $dimensions[0]/2, 0, $_POST['txt-edit'], $color);
 $droot = $_SERVER['DOCUMENT_ROOT']."/meme_generator/";
 $pct = 'assets/media/tmp/'. time() .".jpg";
 $save = $droot.$pct;

 imagejpeg($createdImage, $save);

 require('view/ttt.php');

require('view/ttt.php');

