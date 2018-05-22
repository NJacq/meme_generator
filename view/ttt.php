<?php


$img_choice = $_POST["hidden"];

var_dump($_POST["hidden"]);
$createdImage = imagecreatefromjpeg("$img_choice");

$dimensions = getimagesize($img_choice);


// définition des couleurs utilisée
$orange = imagecolorallocate($createdImage, 255, 128, 0);
$bleu = imagecolorallocate($createdImage, 0, 0, 255);
$bleuclair = imagecolorallocate($createdImage, 156, 227, 254);
$noir = imagecolorallocate($createdImage, 0, 0, 0);
$blanc = imagecolorallocate($createdImage, 255, 255, 255);

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
imagestring($createdImage, $_POST['size'], $dimensions[0]/2, 0, $_POST['txt-edit'], $_POST['color']);
imagejpeg($createdImage);
imagejpeg($createdImage, "image.jpeg");
var_dump($_POST['size']);

?>