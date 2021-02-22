<?php

if (isset($_GET["porcentaje"])) {
        $img = imagecreatetruecolor(400, 400);
        $porcentaje = $_GET["porcentaje"];

        // asignar algunos colores
        $blanco = imagecolorallocate($img, 255, 255, 255);
        $gris_oscuro = imagecolorallocate($img, 0x90, 0x90, 0x90);

        // El color blanco siempre aparecerá
        imagefilledarc($img, 200, 200, 200, 200, 0, 360, $blanco, IMG_ARC_PIE);

        //El color gris es el color que le pasemos por GET
        imagefilledarc(
                $img,
                200,
                200,
                200,
                200,
                0,
                (360 * $porcentaje) / 100,
                $gris_oscuro,
                IMG_ARC_PIE
        );

        header("Content-type: image/png");
        imagepng($img);

        // liberar memoria
        imagedestroy($img);
} else {
        echo "<h1>Debes pasar por GET el numero de porcentaje con la variable \"porcentaje\"</h1>";
}
?>
