<?php include "conecta.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="author" content="Sergio Andrés Yaccelga Castillo">
        <meta name="description" content="Comprobar si un usuario esta registrado en la bbdd">
        <title>hash it!</title>
</head>
<body>
<?php if (isset($_POST["login"], $_POST["pass"])) {
        $conexion = conectaBD::singleton("dwes");
        $res = $conexion->comprobar($_POST["login"], $_POST["pass"]);

        echo $res ? "<h1>Buenas {$res}</h1>" : "<h1>Permiso denegado!</h1>";
} ?>
<h1><?php if (!isset($res)) {
        echo "Buenas desconocido, logueate!! :)";
} ?></h1>
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
<input type="text" name="login" placeholder="login" required>
<input type="password" name="pass" placeholder="password" required>
<button>enviar</button>
</form>
</body>
</html>
