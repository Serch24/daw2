<!DOCTYPE html>
<html lang="es">
	<head>
			<title> Errores</title>
			<meta charset="UTF-8">
			<meta name="description" content="errores">
			<meta name="author" content="Laura">
			
	</head>
	<body>
	<?php

	//si calcula la división
	 $resultado = 0;
	 $numerador = 5;
	 $denominador = 2;
	 @ $denominador ==0 or $resultado = $numerador/$denominador;
	 
	 echo $resultado. '<br>';

	//no calcula la división
	 $resultado = 0;
	 $numerador = 5;
	 $denominador = 0;
	 @ $denominador ==0 or $resultado = $numerador/$denominador;
	 
	 echo $resultado. '<br>';
	 
	 //no permitir que denominador sea cero.
	 $resultado = 0;
	 $numerador = 5;
	 $denominador = 2;
	 @ $denominador !=0 or die ("El denominador Tiene que ser distinto de cero");
	 $resultado = $numerador/$denominador;
	 
	 echo $resultado. '<br>';
	 
	 
	 //no permitir que denominador sea cero.
	 $resultado = 0;
	 $numerador = 5;
	 $denominador = 0;
	 @ $denominador !=0 or die ("El denominador Tiene que ser distinto de cero");
	 $resultado = $numerador/$denominador;
	 
	 echo $resultado. '<br>';
	 
 
	?>
</body>
</html>