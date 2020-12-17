<?php
	$conexion = new mysqli('db','root','serch','daw2');
	if($conexion->connect_errno !=0){
		exit("errorrrr");
	}

	$consulta = $conexion->query("select * from usuarios");
		while($a = $consulta->fetch_row()){
			print_r($a);
		}
	$consulta->close();
phpinfo();

?>
