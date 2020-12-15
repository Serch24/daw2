<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pag Sergio</title>
    <style>
        body{
            background-color: aqua;
        }

        h1{
            font-size: 20px;
        }
    </style>
</head>
<body>

<?php
$variable = 'Sergio Andres Yaccelga Castillo';
$variable_Copia = 'Sergio Andres Yaccelga Castillo';
$variable_Copia2 = &$variable_Copia;
echo('<h2>' . $variable. '</h2>');
echo('<h2>' . $variable_Copia. '</h2>');

//unset($variable_Copia);

echo('<h1> Con Unset: </h1>');
echo('<h2>' . $variable. '</h2>');
echo('<h2>' . $variable_Copia . ',commented'.'</h2>');
echo('<h2>' . $variable_Copia2. '</h2>'); 
?>
</body>
</html>
