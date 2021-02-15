<?php
/*phpinfo();*/
header("Content-type:image/png");
header("Content-Disposition:inline ; filename=bobis.png");
$im = imagecreatetruecolor(400, 300);
$lo = imagecolorallocate($im, 255, 245, 234);
$texto = "Sergio";
imagettftext(
        $im,
        45,
        0,
        80,
        171,
        $lo,
        "./CaskaydiaCove_Nerd_Font_Book.ttf",
        $texto
);
imagepng($im);
imagedestroy($im);
?>
