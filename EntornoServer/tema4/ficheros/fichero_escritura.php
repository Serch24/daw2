<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Catalin">
	<meta name="description" content="Lectura de un fichero y mostrarlo en html">
	<title>Escritura de fichero</title>	
<style>

</style>	
</head>
<body>
<!--Escribe un fichero de texto plano,que esté en el mismo directorio que este php, y pones los saltos de
línea con la constante PHP_EOL-->
	<?php
	//$fichero=fopen();
	
	//apertura
	$file_name="fichero.txt";
	$fichero=@fopen($file_name,'w');
	
	//comprobar si se ha abierto correctamente
	if($fichero){
		//procesar
		$texto=['texto'];
		foreach($texto as $linea){
			fwrite($fichero,$linea); //. PHP_EOL);//PHP_EOL determina el fin de línea
		
		}
			echo "Se han escrito " . count($texto) . " líneas en el fichero <br>";
	//cerrar
		if(fclose($fichero)){
			echo "El fichero se ha cerrado correctamente <br>";
		}
		else{
			echo "No se ha cerrado correctamente <br>";
		}
	
	}else{echo "no se abre";}
	?>
</body>
</html>