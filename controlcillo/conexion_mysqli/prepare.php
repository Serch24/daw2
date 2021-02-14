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
($tmp = $conexion->prepare("select * from usuarios where login = ?")) or
        die("error al preparara");

$tmp->bind_param("s", $nombre) or die("otro error");
$nombre = "sergioo";
$tmp->execute() or die("mas errores");
$resultado = $tmp->get_result();
echo "<pre>";
print_r($resultado->fetch_assoc());
echo "</pre>";
$tmp->close();
$conexion->close();
/*i entero, d double, s string, b blob*/
?>
