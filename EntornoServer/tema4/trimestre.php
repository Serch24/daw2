<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Sergio Andrés Yaccelga Castillo">
    <meta name="description" content="ejercicio sobre trimestres">
    <title>Trimestre</title>
</head>
<body>
<!-- 18.
Hacer un programa que reciba un número de mes de la url (método
GET) y visualice a qué trimestre pertenece o error en caso de que no sea un mes
válido. Utilizar un switch, con el número mínimo de breaks posibles. -->
    <?php
        $numero = $_GET['numero'];

        if (isset($numero)) {
            switch($numero){
                case 1:
                case 2:
                case 3:
                        echo '<h1>Trimestre uno!</h1>';
                    break;
                case 4:
                case 5:
                case 6:
                        echo '<h1>Trimestre dos!</h1>';
                        break;
                case 7:
                case 8:
                case 9:
                        echo '<h1>Trimestre tres!</h1>';
                        break;
                case 10:
                case 11:
                case 12:
                        echo '<h1>Trimestre cuatro</h1>';
                        break;
                default:
                        echo '<h1>Esto no es ningún trimestre, srry! ;/</h1>';
                }
        }else{
            echo "<h2>Coloca un numero!!! plz</h2> \n <h1>e.g: localhost?numero=YourNumber</h1>";
        }

    ?>
</body>
</html>