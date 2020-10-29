<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salida</title>
    <style>
    table{
        border-collapse: collapse;
        margin: 10% auto;
    }
    table,th,td{
        border: 0.5px solid black;

    }
    tr,td{
        height: 35px;
        width: 20px;
    }
    h1{
        text-align: center;
    }
    </style>
</head>
<body>
<?php
$nombre = $_GET["nombre"];
$idioma = $_GET["idioma"];
$contrasena = $_GET["passwd"];
$fecha = $_GET["fecha"];
$gen = $_GET["gen"];
    
    // $tabla=<<<FOO
    //  <table><tr>
    // <th> Nombre </th>
    // <th> Idioma </th>
    // <th> Contraseña </th>
    // <th> Fecha </th>
    // <th> Genero </th></tr><tr>
    // <td>$nombre</td>
    // <td>$idioma</td>
    // <td>$contrasena</td>
    // <td>$fecha</td>
    // <td>$gen</td></tr></table>
    // FOO;

    echo $tabla;
?>
</body>
</html>