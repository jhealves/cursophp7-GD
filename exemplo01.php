<?php 
//Criando imagem com PHP
header("Content-Type: image/png");

$image = imagecreate(256, 256);

$black = imagecolorallocate($image, 0, 0, 0);
$red = imagecolorallocate($image, 255, 0, 0);

imagestring($image, 15, 60, 120, "Curso de PHP 7", $red);

imagepng($image);

imagedestroy($image);


 ?>