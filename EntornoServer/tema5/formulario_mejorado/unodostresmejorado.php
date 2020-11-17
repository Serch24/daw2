<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Sergio Andrés Yaccelga Castillo">
    <meta name="description" content="Ejercicios sobre formularios mejorados">
    <link rel="stylesheet" href="css.css">
    <title>Login</title>
</head>
<body>
       <!-- Crea la páginaunodostresmejorado.php. Partiendo del ejercicio anterior, añadir el siguiente comportamiento.
       -Cuando se produzcan errores de validación en el formulario y me los vuelva a mostrar,
        deben aparecer los datos que había introducido el usuario antes. --> 
        <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if (empty($_POST['nombre']) || empty($_POST['passwd'])) {
                echo "<h1>Hay un campo en blanco</h1>";
            }else{
                echo $_POST['sexo'];
                $nombre = $_POST['nombre'];
                $pass = $_POST['passwd'];
                $valido = true;
            }
        }
        
        if(!empty($_POST['nombre']) && !empty($_POST['passwd']) && $valido){
            echo "<h1>Todo correcto buddy ;-)<h1>\n";
        }else{
        ?>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" id="nombre" value=<?php echo $_POST['nombre']?>>
        <label for="passwd">Contraseña</label>
        <input type="password" name="passwd" id="passwd" value=<?php echo $_POST['passwd']?>>
        <label for="hombre">hombre</label>
        <input type="radio" name="sexo" id="hombre">
        <label for="mujer">Mujer</label>
        <input type="radio" name="sexo" id="mujer">
        <input type="submit" value="enviar">

        </form>
        <?php
        }

    ?>
</body>
</html>