<?php
session_start();
header ("Content-type: image/jpg");


$imageView = getImage($_SESSION['choixImage']);
$pass=str_replace('\\', '/', $_SERVER['DOCUMENT_ROOT'].'/meme_generator/'.$imageView['adress']);
$createdImage = imagecreatefromjpeg($pass);
$dimensions = getimagesize();
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

imagestring($createdImage, $_POST['size'], $dimensions[0]/2, 0, $_POST['txt-edit'], $color);
$imageName = tempName($_SERVER['DOCUMENT_ROOT'].'/meme_generator/assets/media/tmp', "img");
$save = $_SERVER['DOCUMENT_ROOT'].'/meme_generator/assets/media/tmp'. time() .".jpg";

imagejpeg($createdImage, $save);
imagejpeg($createdImage);