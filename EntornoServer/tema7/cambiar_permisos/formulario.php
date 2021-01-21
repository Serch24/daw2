<!DOCTYPE html>
<html lang="es">
        <head>
                <meta charset="UTF-8" />
                <meta
                        name="viewport"
                        content="width=device-width, initial-scale=1.0"
                />
                <meta name="author" content="Sergio Andrés Yaccelga Castillo">
                <meta name="description" content="Cambiar la password de un usuario en la base de datos">
                <title>change password</title>
        </head>


        <body>

<?php
$continuar = false;
$error = false;

if (isset($_POST["enviar"])) {
        if (isset($_POST["usuario"]) && !empty($_POST["usuario"])) {
                if (
                        isset($_POST["ps_antigua"]) &&
                        !empty($_POST["ps_antigua"])
                ) {
                        if (
                                isset($_POST["ps_nueva"]) &&
                                !empty($_POST["ps_nueva"])
                        ) {
                                $continuar = true;
                        } else {
                                $error = true;
                        }
                } else {
                        $error = true;
                }
        } else {
                $error = true;
        }
}

if ($error) {
        echo "<h1>Hay un campo en blanco!!!!</h1>";
}

if ($continuar) {
        $datos;

        //conexion a la  BBDD
        $conexion = new mysqli("localhost", "alumno", "1234", "dwes");
        if ($conexion->connect_errno != 0) {
                exit("Hubo un error en la conexion");
        }

        // REAL_SCAPE_STRING
        $user = $conexion->real_escape_string($_POST["usuario"]);
        $passwd = $conexion->real_escape_string($_POST["ps_antigua"]);
        $passwd_nueva = $conexion->real_escape_string($_POST["ps_nueva"]);

        //consulta
        $consulta = "select * from usuarios where login='$user' and clave='$passwd'";
        if (!($resultado = $conexion->query($consulta))) {
                echo "<h1>Ha habido un error, refresca la página</h1>";
                exit();
        }

        //no se encontró en la BBDD el login o contraseña
        if ($resultado->num_rows === 0) {
                echo "<h1>El usuario o contraseña no son correctos</h1>";
                exit();
        }

        $datos = $resultado->fetch_assoc();

        //guardo en un array asociativo los campos de login y clave para
        //comparar con los datos del formualario
        if (
                strcmp($datos["login"], $user) === 0 &&
                strcmp($datos["clave"], $passwd) === 0
        ) {
                $consulta = "UPDATE usuarios Set clave='$passwd_nueva' where login='$user' and clave='$passwd'";
                if (!($resultado = $conexion->query($consulta))) {
                        echo "</h1>Ha habido un error!</h1>";
                        exit();
                }
                echo "<h1>Se ha cambiado la contraseña correctamente!</h1>";
        }
} else {
         ?>
<h1>Llena el formualario!</h1>
<form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
   <input type="text" name="usuario" placeholder="Escribe tu usuario">
   <input type="password" name="ps_antigua" placeholder="Contraseña antigua">
   <input type="password" name="ps_nueva" placeholder="Contraseña nueva">
   <input type="submit" name="enviar" value="enviar">
</form>
<?php
}
?>
        </body>
</html>



