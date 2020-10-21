<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="Sergio Andres" content="Yaccelga Castillo">
    <title>Document</title>
</head>
<body>
    <?php
        $msg1 = "¿Hola como estas?";
        $msg2 = "Adios!!";
        $msg3 = "Hasta luego.";
        $msg4 = "Muy bien, Gracias.";
        $aleatorio = rand(1,4);
        $concat = "$" . "msg" . $aleatorio;
        echo $concat;
    ?>
</body>
</html>