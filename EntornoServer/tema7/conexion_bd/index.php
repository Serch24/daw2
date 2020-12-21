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

/*CREATE USER alumno@localhost IDENTIFIED BY '1234'*/
/*GRANT <PRIVILEGIO> ON <SERVIDOR/BD/TABLA/CAMPOS> TO <USUARIO>*/
/*GRANT SELECT(login) on daw2.usuarios to alumno@localhost;*/
/*drop user;*/
/*REVOKE SELECT(login) ON daw2.usuarios FROM alumno@localhost; AQui le quito permiso de todo*/
/*select \* from mysql.columns_priv;*/
/*select \* from mysql.tables_priv;*/
/*GRANT SELECT,UPDATE ON daw2.usuarios TO alumno@localhost;*/
/*GRANT INSERT ON daw2.* TO alumno@localhost;*/
	$conexion->close();
	
?>
