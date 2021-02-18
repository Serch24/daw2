<?php
$texto = "adiviname";
$mifo = "./Noruega.png";
$im = imagecreatefrompng($mifo);
for ($i = 0; $i < strlen($texto); $i++) {
        $letra = substr($texto, $i, 1);
        $color = imagecolorallocate($im, 255, 255, 255);
        $y = rand(90, 300);
        $x = rand(90, 600);
        $angulo = rand(0, 150);
        imagettftext(
                $im,
                70,
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
