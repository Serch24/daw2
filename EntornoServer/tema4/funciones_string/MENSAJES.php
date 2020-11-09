<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php

$usuario = $_GET["user"];
$pass = $_GET["pass"];
const MIN_CARACTERES = 5;
if (!empty($usuario) && !empty($pass) ) {
    
    if ((strlen($usuario)>=MIN_CARACTERES) && (strcmp(strrev($usuario),$pass)==0)) {
        echo "<h2 class='welcome'>Bienvenido al foro $usuario</h2>\n";
?>
        <p>por favor indique el tema sobre el que realiza su comentario, gracias</p>
    <form action="caracteres.php" method="get">
        <label for="tema">Tema: </label>
        <input type="text" name="tema" id="tema"><br><br>
        <label for="comentario">Comentario</label>
        <textarea name="comentario" id="comentario" cols="70" rows="8" maxlength=300></textarea>
        <input type="submit" value="Detalles"><br>
        <a href="#">Terminar</a>
        <a href="#">Nueva Opinión</a>

    </form>
        <?php

    }else {
        echo "<h1>Error al escribir el usuario o la contraseña</h1>";
        ?>

        <a href="index.php">Volver a escribir</a>
        
        <?php
    }
}else{
    echo "<h1>Hay un campo en blanco, por favor debes escribir algo.<h1>";
}
        ?>
</body>
</html>