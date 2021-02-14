<?php
$sdn = "mysql:host=mysql;dbname=dwes;charset=utf8";
$usuario = "root";
$pass = "1234";
try {
        $conn = new PDO($sdn, $usuario, $pass);
} catch (PDOException $e) {
        echo "<h1>Error en la conextión: {$e->errorInfo}</h1>";
}

$res = $conn->query("select * from usuarios where login = 'sergio'");
if ($res->rowCount() === 0) {
        echo "<h1>No se encontró nada en la consulta</h1>";
        die();
}
$que = $res->fetch(PDO::FETCH_ASSOC);
echo "<pre>";
print_r($que);
echo "</pre>";
unset($conn);
?>
