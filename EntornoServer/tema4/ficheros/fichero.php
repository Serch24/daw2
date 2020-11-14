<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Catalin">
	<meta name="description" content="Lectura de un fichero y mostrarlo en html">
	<title>Lectura de fichero</title>	
<style>

</style>	
</head>
<body>
<!--Programa que lee un fichero y lo muestra en el html-->
	<?php
	//$fichero=fopen();
	
	//apertura
	$file_name="fichero.txt";
	$fichero=@fopen($file_name,'r');
	
	//comprobar si se ha abierto correctamente
	if($fichero){
		//procesar
		while($linea = fgets($fichero)){
			echo "$linea  <br>";
		}
	
	//cerrar
		if(fclose($fichero)){
			echo "El fichero se ha cerrado correctamente <br>";
		}
		else{
			echo "No se ha cerrado correctamente <br>";
		}
	
	}
	
	?>
</body>
</html>