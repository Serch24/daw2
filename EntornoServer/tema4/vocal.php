<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Sergio Andrés Yaccelga Castillo">
    <meta name="descriptions" content="ejercicio de vocal">
    <title>vocal</title>
</head>
<body>
    <?php
    /* Crear un programa que recibe por GET una vocal, 
    y usando un switch nos indique si la vocal es abierta o cerrada, o bien no es una vocal. */
    if (isset($_GET["vocal"])) {
        $vocal = $_GET["vocal"];
            switch ($vocal) {
                case 'a':
                case 'e':
                case 'o':
                    echo "<h1>la vocal $vocal es abierta<h1>";
                    break;
                    
                case 'i':
                case 'u':
                        echo "<h1>la vocal $vocal es cerrada<h1>";
                        break;
                default:
                    echo "<h1>No existe esa vocal, escribe bien!</h1>";
                    break;
            }
   
    }else{
        echo "<h1>Debes pasar por get una vocal!!!!!!!!!!</h1>";
    }

    ?>
</body>
</html>