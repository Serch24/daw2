<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Sergio Andrés Yaccelga Castillo">
    <meta name="description" content="Ejercicio sobre modulos">
    <title>Modulos</title>
</head>
<body>
    <!-- 20. Dados dos números calcular el módulo de dos números enteros: si el
resultado es 0, indicar división exacta, si el resultado es 1, indicar sobra 1,
si el resultado es 2 indicar sobran 2. En cualquier otro caso indicar sobran
más de 2. Utilizar un switch. -->
    <?php       
        $numero_uno = 12;
        $resultado = 0;
        $numero_dos = 52;

        $resultado = $numero_uno%$numero_dos;
            switch ($resultado) {
                case 0:
                    echo "<h1>La divión es exacta!</h1>";    
                break;
             
                case 1:
                    echo "<h1>Sobran $resultado!</h1>";                    
                break;
                
                case 2:
                    echo "<h1>Sobran $resultado!</h1>";                    
                break;

                default:
                echo "<h1>Sobra más de dos</h1>";
            break;
            }
    ?>
</body>
</html>