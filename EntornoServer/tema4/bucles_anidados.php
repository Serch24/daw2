<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Sergio Andrés Yaccelga Castillo">
    <meta name="descriptions" content="bucle de contraseñas">
    <title>Bucles anidados</title>
</head>
<body>
    <?php
        /* Ejercicio.

    Usar Bucles anidados: 
    Rellenar un array con 10 caracteres: letras, números y símbolos.
    Solicitar por get, la catidad de contraseñas, y el tamaño que tienen que tener.
    Generar de forma aleatoria las contraseñas. 
    Mostrarlas en formato de lista ordenada.

Salida: 

    Si nos indican 5 contraseñas de 8 caracteres, la salida sería.

    4kjoh978
    ljoih890
    kjdhfuih
    ldsio987
    sd4feed0 */
    
   $mount_arrais = $_GET["mount"];
   $size_arrais = $_GET["size"];
   //array de arrays 
   $caracteres = ["w",1,2,"-","k","M","_",5,"h",0,"ñ"];


   if (isset($size_arrais) && isset($mount_arrais)) {
        /* paso los numeros ascci a cadenas con chr()
        35 , 126 ascci */
        echo "<ol>";
        for ($j=0; $j < $mount_arrais; $j++) {
            echo "<li>"; 
            for ($k=0; $k < $size_arrais; $k++) { 
                echo $caracteres[mt_rand(1,10)];
            }
            echo "</li>";
        }
        echo "</ol>";
    }else{
       ?>
       <form action="bucles_anidados.php" method="get">
       <label for="size">tamaño</label>
       <input type="text" name="size" id="size" required>
       <label for="mount">cantidad de contraseñas</label>
       <input type="text" name="mount" id="mount" required>
       <input type="submit" value="enviar">
       </form>
       <?php

    }
    ?>
</body>
</html>