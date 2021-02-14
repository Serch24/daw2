<?php
$sdn = "mysql:host=mysql;dbname=dwes;charset=utf8";
$usuario = "root";
$pass = "1234";
try {
        $conn = new PDO($sdn, $usuario, $pass);
} catch (PDOException $e) {
        echo "<h1>Error en la conextión: {$e->errorInfo}</h1>";
}

($res = $conn->prepare("select * from usuarios where login = :login")) or
        die("algun error ocurrió");
$res->execute([
        ":login" => "sergio",
]);
if ($res->rowCount() === 0) {
        echo "No se encontró nada";
        exit();
}
echo "<pre>";
print_r($res->fetch(PDO::FETCH_ASSOC));
echo "</pre>";

?>
