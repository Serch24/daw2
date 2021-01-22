<?php
$sdn = "mysql:host=mysql;charset=utf8";
$usuario = "root";
$pass = "1234";
$conn = new PDO($sdn, $usuario, $pass);

$attributes = [
        "AUTOCOMMIT",
        "PREFETCH",
        "ERRMODE",
        "CASE",
        "CLIENT_VERSION",
        "CONNECTION_STATUS",
        "ORACLE_NULLS",
        "PERSISTENT",
        "SERVER_INFO",
        "SERVER_VERSION",
        "TIMEOUT",
];
foreach ($attributes as $val) {
        echo "<p>PDO::ATTR_$val: ";
        try {
                echo $conn->getAttribute(constant("PDO::ATTR_$val")) . "</p>";
        } catch (PDOException $e) {
                echo $e->getMessage() . "\n";
        }
}
?>
