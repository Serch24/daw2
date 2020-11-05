<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Sergio Andrés Yaccelga Castillo">
    <meta name="description" content="factorial de un numero">
    <title>factorial de un numero</title>
</head>
<body>
    <?php
        /* Crear una función recursiva que calcule el factorial de un número.
        Calcular el factorial de un número, y mostrarlo por pantalla. */

        function factorial($n){
            return ($n==0)? 1: ($n*factorial($n-1));
        }
        echo "<h1>".factorial(10)."</h1>";
    
    ?>
</body>
</html>