<?php
/*phpinfo();*/
/*header("Content-type:image/png");
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
imagedestroy($im);*/

$mifo = "./foto.png";
$texto = "sergio";
$im = imagecreatefrompng($mifo);
for ($i = 0; $i < strlen($texto); $i++) {
        $letra = substr($texto, $i, 1);
        $color = imagecolorallocate(
                $im,
                rand(0, 255),
                rand(0, 255),
                rand(0, 255)
        );
        $y = rand(150, 750);
        $x = $i * 40 + rand(200, 1000);
        $angulo = rand(0, 750);
        imagettftext(
                $im,
                160,
                $angulo,
                $x,
                $y,
                $color,
                "./CaskaydiaCove_Nerd_Font_Book.ttf",
                $letra
        );
}
header("Content-type: image/png");
header("Content-Disposition:inline; filename=nah.png");
imagepng($im);
?>
