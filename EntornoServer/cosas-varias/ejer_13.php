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
<!-- 13.Modifica la página anterior para añadir en una tabla 
    de una sola columna el código php que has empleado -->
    <?php
    $randon = rand(0,364);
    $randon2 = rand(0,364);
    echo "
    <table>
    <tr>
    <td style = 'background-color:hsl($randon,100%,50%)'>
    </td>
    <td style = 'background-color:hsl($randon2,100%,50%)'>
    </td>
    </tr>
    </table>"
    ?>
</body>
</html>