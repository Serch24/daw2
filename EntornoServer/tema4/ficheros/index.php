<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Sergio Andres Yaccelga Castillo">
    <meta name="description" content="lectura y escritura de ficheros">
    <title>Ficheros</title>
</head>
<body>
    <?php
    error_reporting(E_ALL);

        $path = './sergioq.txt';
        $texto = ['Nombre'=> 'Sergio','Apellido'=>'Yaccelga','Edad'=>20];
        $ecr = @fopen($path,'r') or die("no se abre");
        
        foreach ($texto as $key => $value) {
            fwrite($ecr,"$key = $value".PHP_EOL) or die("no se escribe");
        }
        
        fclose($ecr);
        echo "Terminado!";
    ?>

</body>
</html>