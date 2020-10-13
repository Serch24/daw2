<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nombre = 'pepe';
        $saludo = 'buenos dias';

        echo $saludo . ' el ' . '$nombre' . ' es ' . "'$nombre'" . "<br>";

        echo $saludo . ' el ' .'$nombre' . ' es ' . "\'";
    ?>
</body>
</html>