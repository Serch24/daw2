<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Sergio Andres Yaccelga Castillo">
	<meta name="description" content="Examen final de php">
	<link rel="stylesheet" href="style.css">
	<title>Examen</title>
</head>
<body>
<?php if (isset($_GET["enviar"])) {
        require_once "./conexion.php";
        $conexion = conectaBD::singleton("examen");
        $respuesta_log = $conexion->comprobar_login($_GET["login"]);
        if (isset($respuesta_log["mensaje"])) {
                echo "<h1>" . $respuesta_log["mensaje"] . "</h1>";
                exit();
        }

        $respuesta_eve = $conexion->comprobar_evento(
                $_GET["fecha_validez"],
                $_GET["hora_evento"]
        );

        if (isset($respuesta_eve["mensaje"])) {
                echo "<h1>" . $respuesta_eve["mensaje"] . "</h1>";
                exit();
        }

        $respuesta_hora = $conexion->comprobar_hora_fecha(
                $_GET["fecha_validez"],
                $_GET["hora_evento"]
        );

        if (isset($respuesta_hora["mensaje"])) {
                echo "<h1>" . $respuesta_hora["mensaje"] . "</h1>";
                exit();
        }

        $respuesta_nomb = $conexion->comprobar_letra($_GET["nombre_evento"]);
        if (isset($respuesta_nomb["mensaje"])) {
                echo "<h1>" . $respuesta_nomb["mensaje"] . "</h1>";
                exit();
        }

        $res = $conexion->dar_alta($_GET);
        echo "<h1>" . $res["mensaje"] . "</h1>";
} else {
         ?>
		<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="get">
			<input type="text" name="login" placeholder="login">
			<input type="password" name="password" placeholder="Password">
			<input type="text" name="nombre_evento" placeholder="Evento">
			<input type="text" name="descripcion" placeholder="Descripcion">
			<input type="text" name="lugar" placeholder="Lugar">
			<input type="date" name="fecha_validez" placeholder="fecha">
			<input type="time" name="hora_evento">
			<button name="enviar">Alta</button>
		</form>
		<?php
} ?>
</body>
</html>
