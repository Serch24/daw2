<!DOCTYPE html>
<html lang="es">
	<head>
		<title> Cookies http only</title>
		<meta charset="UTF-8">
		<meta name="description" content="cookies httponly">
		<meta name="author" content="Sergio">
	</head>
	<body>
	<!-- Crea un script para crear, borrar y mostrar una cookie tal y como estamos haciendo en clase.
	Os adjunto mi plantilla para la página principal, tenéis que completarla para añadir la parte de JavaScript para acceder a la cookie.
	Y también subir los otros dos archivos de creación de la cookie y borrado de la cookie con el último parámetro a false, para impedir que se acceda por JavaScript.
	Si funciona entonces solo debería de mostraros la cookie a través del código php y no del de JavaScript -->
		<a href="crea_cookies_httponly.php"> Crea cookie.</a><br><br>
		<a href="borra_cookies_httponly.php" > Borra cookie.</a><br><br>
		<?php
		if (!empty($_COOKIE['nombre'])){
			echo "<h1>Las cookies en PHP: {$_COOKIE['nombre']}</h1>";
		}else{
			echo '<h1>No existe la cookie EN PHP<h1>';
		}
		?>

		<h1 class="mostrar"></h1>
	<!--incluir un javascript para acceder a esa cookie y mostrarla.-->
		<script src="app.js"></script>
	
</body>
</html>