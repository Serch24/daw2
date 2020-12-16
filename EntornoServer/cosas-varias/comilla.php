<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Sergio Yaccelga">
	<title>Comillas uwu</title>
</head>
<body>
	<?php
		$nombre='pepe';
		$saludo='Buenos dias';
		
		//comillas simples
		echo $saludo  .' el $nombre es ' . '\'' . $nombre . '\'' . '<br>';
		
		echo "$saludo el \$nombre es  '$nombre'<br>";

		//comillas dobles
		echo $saludo . ' el $nombre es ' . '"' . $nombre . '"' . '<br>';
		
		echo "$saludo el \$nombre es ".  "\"$nombre\"" . '<br>';
	
	?>

	
</body>
</html>