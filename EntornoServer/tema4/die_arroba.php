<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Sergio Andrés Yaccelga Castillo">
    <meta name="description" content="Ejercicio sobre @ y die">
    <title>funciones nuevas</title>
</head>
<body>
<!-- 19. Dado dos números, calcular la división entera, comprobando primero que
los números son positivos, que el primero es mayor que el segundo y que el
divisor es distinto de 0. Dar mensajes de error adecuados en función del fallo.
Hacer el ejercicio utilizando @ y die. -->
    <?php
        $numero_uno_numerador = 01;
        $numero_dos_denominador = 50;
        $resultado = 0;

        @ $numero_dos_denominador !=0 or die("<h1>Hay un 0 en el denominador!!!</h1>"); 
        @ $numero_dos_denominador > 0 or die("<h1>El denominador debe ser mayor que 0!!!</h1>"); 
        @ $numero_uno_numerador > 0 or die("<h1>El numerador debe ser mayor a 0, osea positivo</h1>"); 
        @ $numero_uno_numerador >= $numero_dos_denominador or die("<h1>El denominador es mayor!!!<h1>");
        $resultado = $numero_uno_numerador/$numero_dos_denominador;
        echo "<h1>$resultado</h1>";
    ?>
</body>
</html>