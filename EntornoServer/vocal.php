<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
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
            echo "No existeee";
            break;
    }

    ?>
</body>
</html>