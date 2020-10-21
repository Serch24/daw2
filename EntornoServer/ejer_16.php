<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="Sergio Andres" content="Yaccelga Castillo">
    <title>ejercicio 16</title>
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
        height: 35px;
        text-align: center;
    }
    </style>
</head>
<body>
<!-- 16.Mostrar una tabla de 4 por 4 que muestre las primeras 4 potencias de los números del uno 1 al 4 
(hacer una función que las calcule invocando la función pow).
 En PHP las funciones hay que definirlas antes de invocarlas.  -->
  
  <?php

    function potencia ($b,$e){
        return pow($b,$e);
    }

    // echo potencia(2,3); 

    echo "<table><tr>";
    
    for ($i=1; $i <= 4; $i++) {
        $resul = potencia(1,$i); 
        echo "<td> $resul</td>";
    }
    echo "</tr><tr>";

    for ($i=1; $i <= 4; $i++) {
        $resul = potencia(2,$i); 
        echo "<td> $resul</td>";
    }
    echo "</tr><tr>";

    for ($i=1; $i <= 4; $i++) {
        $resul = potencia(3,$i); 
        echo "<td> $resul</td>";
    }
    echo "</tr><tr>";

    for ($i=1; $i <= 4; $i++) {
        $resul = potencia(4,$i); 
        echo "<td> $resul</td>";
    }
    echo "</tr></table>";



     
  ?>
</body>
</html>