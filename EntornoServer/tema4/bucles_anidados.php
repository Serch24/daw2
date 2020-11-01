<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="Sergio Andŕes" content="Yaccelga Castillo">
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
   $alotofarrais = array_pad($ar = [],$mount_arrais,[]);



   if (isset($size_arrais) && isset($mount_arrais)) {
        /* paso los numeros ascci a cadenas con chr()
        35 , 126 ascci */
        for ($j=0; $j < $mount_arrais; $j++) { 
            for ($k=0; $k < $size_arrais; $k++) { 
                $alotofarrais[$j][$k]=chr(mt_rand(35,126));
            }
        }
    }
    
    /* Recorro el array */
    echo "<ol>";
    for ($i=0; $i < count($alotofarrais); $i++) { 
        echo "<li>";
        for ($k=0; $k < count($alotofarrais[$i]); $k++) { 
            echo $alotofarrais[$i][$k];
        }
        echo "</li>";
    }
    echo "</ol>";
    ?>
</body>
</html>