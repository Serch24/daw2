<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Sergio Andrés Yaccelga Castillo">
    <meta name="content" content="Formulario para opinar cualquier tema">
    <link rel="stylesheet" href="style.css">
    <title>Foro</title>
</head>
<body>

<!-- Crea el archivo MENSAJES . PHP que tras comprobar que se ha accedido con usuario y password correctas (
usuario con 5 o más caracteres y su password el nombre de usuario al revés) muestre un formulario con campos
para escribir tema de debate (asunto) y la opinión ( área de texto para escribir 300 o más caracteres ) ;
presentará también los siguientes elementos: -->

<!-- 
- Enlace con etiqueta Nueva Opinión que vuelva a presentar el formulario en blanco
- Enlace con etiqueta Terminar que presente el documento HTML de identificación de usuario -->

<?php
    error_reporting(E_ALL);
    $usuario = $_GET["user"];
    $pass = $_GET["pass"];
    $tmp_usuario = $usuario;
    $tmp_pass = $pass;
    const MIN_CARACTERES = 5;
        if (!empty($usuario) && !empty($pass) ) {
            
            if ((strlen($usuario)>=MIN_CARACTERES) && (strcmp(strrev($usuario),$pass)==0)) {
                echo "<h1>Bienvenido al foro, $usuario.</h1>\n";
?>
                <p>por favor indique el tema sobre el que desea realizar su comentario, gracias</p>
                    <form action="caracteres.php" method="get">
                        <label for="tema" class="lab">Tema: </label>
                        <input type="text" name="tema" id="tema" class="tem"><br><br>
                        <label for="comentario" class="lab">Comentario: </label>
                        <textarea name="comentario" id="comentario" cols="70" rows="8" maxlength=300 class="com"></textarea>
                        <input type="hidden" name="usu" id="usu" value=<?php echo "$usuario" ?>>
                        <input type="hidden" name="pass" id="pass" value=<?php echo "$pass" ?>>
                        <input type="submit" value="Detalles" class="sub"><br>
                        <a href=<?php echo "/index.php"?>>Terminar</a>
                        <a href=<?php echo "'?user=$usuario&pass=$pass'"?>>Nueva Opinión</a>
                        
                        
                    </form>
                <?php

            }else {
                echo "<h1>Error al escribir el usuario o la contraseña</h1>\n";    
                echo "<a href='/'>Volver a escribir</a>\n";
            }
        }else{
            echo "<h1>Hay un campo en blanco, por favor debes escribir algo.</h1>\n";
            echo "<a href='index.php'>Volver a escribir</a>\n";
        }
                ?>
</body>
</html>