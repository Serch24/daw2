<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="Sergio Yaccelga" content="Yaccelga Castillo">
    <title>vocal</title>
</head>
<body>
    <?php
    /* Crear un programa que recibe por GET una vocal, 
    y usando un switch nos indique si la vocal es abierta o cerrada, o bien no es una vocal. */
    error_reporting(0);
    if (isset($_GET["vocal"])) {
        $vocal = $_GET["vocal"];
    }else{
        $vocal = "no existe";
    }

    switch ($vocal) {
        case 'a':
            echo "la vocal $vocal es abierta";
            break;

        case 'e':
            echo "la vocal $vocal es abierta";
            break;
        case 'i':
            echo "la vocal $vocal es cerrada";
            break;
        case 'o':
            echo "la vocal $vocal es abierta";
            break;

        case 'u':
                echo "la vocal $vocal es cerrada";
                break;
        default:
            echo "No existe esa vocal";
            break;
    }

    ?>
</body>
</html>