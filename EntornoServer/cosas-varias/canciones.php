<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canciones</title>
    <style>
        li{
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
    <h1>Lista de canciones</h1>
    <?php
    $cancion1= "Me gustas tu";
    $cancion2= "goodbye my lover";
    $cancion3= "hot & cold";
    $cancion4= "minero";
    $cancion5= "abduzcan";

    echo "<ol>
    <li>$cancion1</li>
    <li>$cancion2</li>
    <li>$cancion3</li>
    <li>$cancion4</li>
    <li>$cancion5</li>
    </ol>";

    ?>
</body>
</html>