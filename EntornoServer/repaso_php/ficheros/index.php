<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    error_reporting(E_ALL);
    /* Con @ silencio el warning que aparece si no encuentra el fichero a leer!! */
        /* $fichero = fopen("./texto.txt",'a');
        if(!$fichero){
            die("No se pudo leer el fichero");
        }
        $ok = fwrite($fichero,"hola soy sergio\n");
        if(!$ok){
            echo "ubo un error";
        }
        echo "Se ha escrito todo";
        
        
        while($linea = fgets($fichero)){
            echo $linea . "<br>";
        }

        echo mkdir("hola",0777);


        fclose($fichero); */

        echo mt_rand(2,10);
    ?>
</body>
</html>