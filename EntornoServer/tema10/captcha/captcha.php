<?php
$crear_cookie = function ($texto) {
        $mifo = "./mas.png";
        $im = imagecreatefrompng($mifo);
        for ($i = 0; $i < strlen($texto); $i++) {
                $letra = substr($texto, $i, 1);
                $y = rand(100, 555);
                $x = $i + 40 + rand(100, 855);
                $color = imagecolorallocate(
                        $im,
                        rand(0, 255),
                        rand(0, 255),
                        rand(0, 255)
                );
                $angulo = rand(0, 50);

                imagettftext(
                        $im,
                        100,
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
};

if (isset($_GET["texto"])) {
        $crear_cookie($_GET["texto"]);
        setcookie("ready", 1);
}
header("location:/");
?>
