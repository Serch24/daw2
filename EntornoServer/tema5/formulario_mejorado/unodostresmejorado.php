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
    
        error_reporting(E_ALL);
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if (empty($_POST['nombre']) || empty($_POST['passwd'])) {
                echo "<h1 class='error'>Hay un campo en blanco</h1>\n";
            }else{
                $nombre = $_POST['nombre'];
                $pass = $_POST['passwd'];
                $sexo = $_POST['sexo'];
                $idioma[] = $_POST['idioma']; 
                $valido = true;
            }
        }
        if(!empty($_POST['nombre']) && !empty($_POST['passwd']) && $valido){
            echo "<h1 class='win'>Todo correcto buddy. ;-))</h1>\n";
        }else{
        ?>
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                <label for="nombre">Nombre: </label>
                <input type="text" name="nombre" id="nombre" value="<?php echo (!empty($_POST['nombre']))? $_POST['nombre']:""?>">
                <label for="passwd">Contraseña</label>
                <input type="password" name="passwd" id="passwd">
                <label for="hombre">hombre</label>
                <input type="radio" name="sexo" id="hombre" value="hombre" checked>
                <label for="mujer">Mujer</label>
                <input type="radio" name="sexo" id="mujer" value="mujer">
                <label for="ingles" class="a"><input type="checkbox" name="idioma[]" id="ingles" value="ingles" checked>Inglés</label>
                <label for="aleman" class="a"><input type="checkbox" name="idioma[]" id="aleman" value="aleman" checked>Alemán</label>            
                <label for="frances" class="a"><input type="checkbox" name="idioma[]" id="frances" value="frances">Francés</label>            
                <input type="submit" value="enviar">
            </form>
        <?php
        }

    ?>
</body>
</html>