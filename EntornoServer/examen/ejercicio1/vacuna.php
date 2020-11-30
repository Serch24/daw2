<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta nam="author" content="Sergio Andrés Yaccelga Castillo">
    <meta name="description" content="Ejercicio de vacunación">
    <link rel="stylesheet" href="css.css">
    <title>Vacunación</title>
</head>
<body>
    <?php
    error_reporting(E_ALL);
    $nombre_fichero = "tmp";
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $error=false;
            if(is_numeric($_POST['nombre_vacuna'])){
                echo "<h1>Debes escribir un nombre, no un numero!! asshole.</h1>";
                $error = true;
            }
            if(($_POST['efectividad']<0 || $_POST['efectividad']>100) && $error==false){
                echo "<h1>La efectividad esta fuera del rango!!. Rango permitido de 0 a 100 (incluidos)</h1>";
                $error = true;
            }
            require_once 'inc/constantes.php';
            if(defined('TIEMPO_DE_CARENCIA') && $error==false){
                //le sumo los dias a la fecha actual para saber si está a tiempo de entregar o no!
                $fecha_limite = date("yy-m-d",time()+60*60*24*TIEMPO_DE_CARENCIA);
                if(!($_POST['fecha'] > $fecha_limite)){
                    echo "<h1>La fecha no es valida porque es inferior a lo estupulado!</h1>";
                    $error = true;
                }
            }
            if(!is_dir("img/")){
                mkdir("img/",0777);
            }

                if(is_uploaded_file($_FILES['imagen']['tmp_name'])){
                $directorio = "img/";
                  $nombre_fichero= "{$_POST['nombre_vacuna']}-{$_FILES['imagen']['name']}";
                  $fichero_subir = $directorio . $nombre_fichero;
                  if(is_file($fichero_subir)){
                      $id_unico = time();
                      $nombre_fichero = $id_unico . "-". $nombre_fichero;
                  }
                  $GLOBALS['nombre_fichero']=$nombre_fichero;
                  move_uploaded_file($_FILES['imagen']['tmp_name'],$directorio.$nombre_fichero);
                  echo "<h1>Fichero subido :D</h1>";
            }
        }
        if($_SERVER['REQUEST_METHOD']=='POST' && $error==false){
            echo "<h1>Vacuna dada de alta!!!</h1>";
            echo "<p>Nombre de la vacuna: {$_POST['nombre_vacuna']}</p>";
            echo "<p>Efectividad: {$_POST['efectividad']}</p>";
            echo "<p>Fecha de entrega de la vacuna: {$_POST['fecha']}</p>";
            echo "<img src='img/{$nombre_fichero}' alt='Logo de vacuna'>";
        }else{
            ?>
                <form action="<?php $_SERVER['PHP_SELF']?>" method="post" ENCTYPE="multipart/form-data">
                    <label for="nombre_vacuna">Nombre de la vacuna: </label>
                    <input type="text" name="nombre_vacuna" id="nombre_vacuna" required value=<?php echo (isset($_POST['nombre_vacuna']))? $_POST['nombre_vacuna']:""?>>
                    <label for="efectividad">Efectividad:</label>
                    <input type="number" name="efectividad" id="efectividad" required value=<?php echo (isset($_POST['efectividad']))? $_POST['efectividad']:""?>>
                    <label for="fecha">Fecha de entrega:</label>
                    <input type="date" name="fecha" id="fecha" required value=<?php echo (isset($_POST['fecha']))? $_POST['fecha']:""?>>
                    <label for="imagen">Logo:</label>
                    <input type="file" name="imagen" id="imagen" required>
                    <button class="enviar">Enviar</button>
                </form>
            <?php
        }
    ?>
</body>
</html>