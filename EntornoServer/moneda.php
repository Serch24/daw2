<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>moneda</title>
</head>
<body>
    <?php
        const MONEDA = "EURO";
        if (defined("MONEDA")) {
            echo "Está definida <br>";
        } else {
            echo "no está definida <br>";
        }
        
        var_dump(MONEDA);
    ?>
</body>
</html>