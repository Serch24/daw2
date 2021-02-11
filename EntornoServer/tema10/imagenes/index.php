<?php
header("Content-type:image/png");
header("Content-Disposition:inline ; filename=bobis.png");

$im = imagecreatetruecolor(400, 300);
$lo = imagecolorallocate($im, 255, 255, 255);
$texto = "Sergio";
imagettftext(
        $im,
        60,
        0,
        100,
        201,
        $lo,
        "./CaskaydiaCove_Nerd_Font_Book.ttf",
        $texto
);
imagepng($im);
imagedestroy($im);
?>
