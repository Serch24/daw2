<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="Sergio Andres" content="Yaccelga Castillo">
    <title>Document</title>
</head>
<body>
    <?php
        $msg1 = "hola";
        $msg2 = "hola como estas";
        $msg3 = "hola chao";
        $msg4 = "hola nooo";
        $opcion = rand(1,4);
        $k = "msg" . $opcion;
        echo $$k;
    
    ?>
</body>
</html>