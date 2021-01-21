<?php
//PASO 1. Conectarnos.
try {
        //$con = new PDO('mysql:hosts=localhost;port=3306;dbname=dwes;charset=utf8', 'josemi', '1234', []);
        $con = new PDO(
                "mysql:host=mysql;dbname=dwes;charset=utf8",
                "filemina",
                "1234"
        );
        //PASO 2. Comprobar la conexión
} catch (PDOException $e) {
        exit("Falló la conexión: " . $e->getMessage());
}

//PASO 3. Realizar la consulta
$usuario = $con->quote($_GET["usuario"] . "%");
$sentencia = "select * from dwes.usuarios where login like $usuario ";
//echo $sentencia . '<br>';
$consulta = $con->query($sentencia); //PDOStatement
//var_dump($consulta);

//PASO 4. Procesar la consulta: Obtener resultados
//$consulta es PDOStatement
while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {
        echo "Usuario: " .
                $fila["login"] .
                " Contraseña:" .
                $fila["clave"] .
                " <br>";
}

//PASO 5. Cerrar la conexión
unset($con);
?>
