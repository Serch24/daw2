<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="Sergio Andres" content="Yaccelga Castillo">
    <title>Ejercicio-12</title>
    <style>
    table{
        border-collapse: collapse;
        margin: 10% auto;
        width: 220px;
    }
    table,td{
        border: 0.5px solid black;
    }
    tr,td{
        height: 150px;
        text-align: center;
    }
    </style>
</head>
<body>
<!-- 12.Crea una página con una tabla con dos columnas de un tamaño fijo. Haz que cada vez que se recargue la página muestre dos colores diferentes.
 (Uso de una función random en php, y la función hsl() para css). -->
    <?php
    $randon = rand(0,364);
    echo "
    <table style = 'background-color:hsl($randon,100%,50%)'>
    <tr>
    <td>
    </td>
    <td>
    </td>
    </tr>
    </table>"
    ?>
</body>
</html>