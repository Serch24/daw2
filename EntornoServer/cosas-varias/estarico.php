<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>estatico</title>
</head>
<body>
    <?php

        function test(){
            static $count = 0;
            $count++;
            echo $count;
        }

        test();
        test();
    ?>
</body>
</html>