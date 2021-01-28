<?php
function segunda_forma()
{
        $arr = [];
        $dsn = "mysql:host=mysql;dbname=dwes;charset=utf8";
        $username = "root";
        $password = "1234";

        try {
                $connection = new PDO($dsn, $username, $password);
        } catch (PDOException $e) {
                echo json_encode([
                        "mensaje" => "ocurrio algo",
                        "error" => $e->getMessage(),
                ]);
                exit();
        }

        $tmp = $connection->query("select * from tasks");

        while ($a = $tmp->fetch(PDO::FETCH_ASSOC)) {
                $arr[] = $a;
        }

        //end of the connection
        echo json_encode($arr);
        unset($connection);
}
segunda_forma();
?>
