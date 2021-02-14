<?php
$database = "dwes";
$usuario = "root";
$passwd = "1234";
$host = "mysql";
$conexion = new mysqli($host, $usuario, $passwd, $database);

/*Comprobar que la conexion fue exitosa!*/
if ($conexion->connect_error) {
        echo "<h1>error En la conexión</h1>";
        exit();
}
$consulta = "select * from usuarios where login = 'sergio'";
$a = $conexion->query($consulta);
if ($a->num_rows === 0) {
        echo "<h1>NO se encontró nada</h1>";
        exit();
}

echo "<pre>";
print_r($a->fetch_assoc());
echo "</pre>";
$conexion->close();
?>
