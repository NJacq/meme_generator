<?php

header ("Content-type: image/jpeg");

$image = imagecreatefromjpeg("mon-image.jpg");

$dimensions = getimagesize("mon-image.jpg");


// définition des couleurs utilisée
$orange = imagecolorallocate($image, 255, 128, 0);
$bleu = imagecolorallocate($image, 0, 0, 255);
$bleuclair = imagecolorallocate($image, 156, 227, 254);
$noir = imagecolorallocate($image, 0, 0, 0);
$blanc = imagecolorallocate($image, 255, 255, 255);

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
imagestring($image, 5, $dimensions[0]/2, 0, "Julien", $blanc);
imagejpeg($image);
imagejpeg($image, "image.jpeg");

?>