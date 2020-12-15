<!DOCTYPE html>
<html lang="es">
<head>
<!---Escribir una página PHP utilizando las constantes predefinidas--->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Muestra</title>
</head>
<body>
	<?php
		$nombre='pepe';
		$saludo='Buenos dias';
		
		//Buenos dias el $nombre es 'pepe'
		echo $saludo  .' el $nombre es ' . '\'' . $nombre . '\'' . '<br>';
		
		echo "$saludo el \$nombre es  '$nombre'<br>";
		
		
		
		//Buenos dias el $nombre es "pepe"
		echo $saludo . 'el $nombre es ' . '"' . $nombre . '"' . '<br>';
		
		echo "$saludo el \$nombre es ".  "\"$nombre\"" . '<br>';
	
	?>

	
</body>
</html>