<?php
	$conexion = new mysqli('db','root','serch','daw2');
	if($conexion->connect_errno !=0){
		exit("errorrrr");
	}
	$usuario = $conexion->real_escape_string("unNombre");
	$pass = $conexion->real_escape_string(12121);
	$dato = "insert into usuarios(login,clave)VALUES('$usuario','$pass')";
		if($conexion->query($dato)=== TRUE){
				  echo "todo gucci";
		}else{
			echo "nope";
		}
	$consulta = $conexion->query("select * from usuarios");
		echo "<pre>";
		while($a = $consulta->fetch_row()){
			print_r($a);
		}
		echo "</pre>";
	$conexion->close();
	
?>
