<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>alumno</title>
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
    <h1>Ficha del alumno</h1>
    <?php
        $persona = array('nombre' => 'sergio Andres', 'apellidos' => 'Yaccelga Castillo', 'edad' => 20,'direccion'=>'calle huawei 32','tel'=>222222);

        echo "<table>";
        echo "<tr> 
        <th> Nombre </th>
        <th> Apellido </th>
        <th> Edad </th>
        <th> Dirección </th>
        <th> teléfono </th><tr>";
        echo "<td>" . $persona['nombre'] . "</td>";
        echo "<td>" . $persona['apellidos'] . "</td>";
        echo "<td>" . $persona['edad'] . "</td>";
        echo "<td>" . $persona['direccion'] . "</td>";
        echo "<td>" . $persona['tel'] . "</td></tr></table>";
        
    ?>
</body>
</html>