<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Sergio Andres Yaccelga Castillo">
	<meta name="description" content="Examen final de php">
	<link rel="stylesheet" href="./style.css">
	<title>Examen final... espero</title>
</head>
<body>
<?php if (isset($_GET["enviar"])) {

        require "./conecta_db.php";
        $conexion = conectaBD::singleton("examen2eva");
        $respuesta_usu = $conexion->comprobar_usuario($_GET["login"]);
        if (isset($respuesta_usu["mensaje"])) {
                echo "<h1>" . $respuesta_usu["mensaje"] . "</h1>";
                exit();
        }

        $respuesta_pass = $conexion->comprobar_pass(
                $_GET["login"],
                $_GET["password"]
        );
        if (isset($respuesta_pass["mensaje"])) {
                echo "<h1>" . $respuesta_pass["mensaje"] . "</h1>";
                exit();
        }

        $perfil = $conexion->comprobar_permisos($_GET["login"]);
        if (isset($perfil["mensaje"])) {
                echo "<h1>" . $perfil["mensaje"] . "</h1>";
                exit();
        }

        $vacunas_disponibles = $conexion->comprobar_vacunas(
                $_GET["vacunas"],
                $_GET["cantidad"]
        );

        if (isset($vacunas_disponibles["mensaje"])) {
                echo "<h1>" . $vacunas_disponibles["mensaje"] . "</h1>";
                exit();
        }

        $suficiente = $conexion->comprobar_suficiente($_GET["cantidad"]);

        if (isset($suficiente["mensaje"])) {
                echo "<h1>" . $suficiente["mensaje"] . "</h1>";
                exit();
        }

        $cand = $conexion->candidatos($_GET["cantidad"]);
        ?>
        <div class="conta">
        <table>
        <tbody>
                <tr>
                        <th>Codigo</th>
                        <th>nombre</th>
                        <th>apellidos</th>
                        <th>fecha de nacimiento</th>
                </tr>

        <?php if (isset($cand)): ?>
                <?php foreach ($cand as $datos): ?>
                        <tr>
                          <td><?php echo $datos->idpersona; ?></td>
                          <td><?php echo $datos->nombre; ?></td>
                          <td><?php echo $datos->apellidos; ?></td>
                          <td><?php echo $datos->fecha_nac; ?></td>
                        </tr>
                <?php endforeach; ?>
        <?php endif; ?>

        </tbody>
        </table>
        </div>
<?php
} else {
         ?>
		<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="get">
         <h2>Login:</h2>
			<input type="text" name="login" placeholder="Usuario">
			<input type="password" name="password" placeholder="Password">
         <hr><br>
         <h2>Convocatoria</h2>
         <select id="vacunas" name="vacunas">
                 <option value="Moderna">Moderna</option>
                 <option value="pfizer">Pfizer</option>
                 <option value="Sputnik V">Sputnik V</option>
                 <option value="AstraZeneca">AstraZeneca</option>
         </select>
			<input type="number" name="cantidad" placeholder="Cantidad personas vacunadas">
			<button name="enviar">Aceptar</button>
		</form>
		<?php
} ?>
</body>
</html>
