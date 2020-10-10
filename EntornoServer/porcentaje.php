<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Porcentaje</title>
</head>
<body>
    <?php
    $ninos = 60;   
    $ninas = 23;

    echo '<h1>Niñas: ' . $ninas . '</h1><br>';
    echo '<h1>Niños: ' . $ninos . '</h1><br>';
    echo '<h1> Porcentaje de niñas: ' . (($ninas*100)/($ninos+$ninas)) . '%</h1><br>';
    echo '<h1> Porcentaje de niños: ' . (($ninos*100)/($ninos+$ninas)) . '%</h1>';
    ?>
</body>
</html>