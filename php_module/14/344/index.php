<?php
$im = imagecreatetruecolor(260, 200);

$green    = imagecolorallocate($im, 20, 145, 40);
$darkgreen = imagecolorallocate($im, 25, 80, 25);
$blue     = imagecolorallocate($im, 0, 225, 205);
$darkblue = imagecolorallocate($im, 10, 180, 200);
$red      = imagecolorallocate($im, 255, 0, 0);
$darkred  = imagecolorallocate($im, 202, 10, 0);

for ($i = 110; $i > 100; $i--){
  imagefilledarc($im, 130, $i, 150, 100, 0, 95, $darkgreen, IMG_ARC_PIE);
  imagefilledarc($im, 130, $i, 150, 100, 95, 125 , $darkblue, IMG_ARC_PIE);
  imagefilledarc($im, 130, $i, 150, 100, 125, 360 , $darkred, IMG_ARC_PIE);
}

imagefilledarc($im, 130, 100, 150, 100, 0, 95, $green, IMG_ARC_PIE);
imagefilledarc($im, 130, 100, 150, 100, 95, 125 , $blue, IMG_ARC_PIE);
imagefilledarc($im, 130, 100, 150, 100, 125, 360 , $red, IMG_ARC_PIE);

header('Content-type: image/png');
imagepng($im);
imagedestroy($im);
?> 