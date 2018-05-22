<?php
session_start();

$imageView = getImage($_SESSION['choixImage']);
$createdImage = imagecreatefromjpeg($_SERVER['DOCUMENT_ROOT'].'/meme_generator/'.$imageView['adress']);
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






// permet de connaitre la longueur et largeur des images
//$largeur_destination = imagesx($destination);
//$hauteur_destination = imagesy($destination);

//$x = $largeur_destination/2;
//$y = 0;

//$police =2;
//$couleur = $blanc;
//$texte_a_ecrire = "test";
// permet d'écrire sur l'image


//imagestring($image, $police, $x, $y, $texte_a_ecrire, $couleur);
imagestring($createdImage, $_POST['size'], $dimensions[0]/2, 0, $_POST['txt-edit'], $color);
imagejpeg($createdImage);
imagejpeg($createdImage, "image.jpeg");
?>