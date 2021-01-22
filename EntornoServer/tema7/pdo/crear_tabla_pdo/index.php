<?php
class conectDB
{
        private $sdn = "mysql:host=mysql;dbname=dwes;charset=utf8";
        private $usuario = "root";
        private $pass = "1234";
        private $conexion = null;

        public function __construct()
        {
                try {
                        $this->conexion = new PDO(
                                $this->sdn,
                                $this->usuario,
                                $this->pass
                        );
                } catch (PDOException $e) {
                        echo "<h1>Error en la conexión</h1>";
                        exit();
                }
        }

        public function __destruct()
        {
                $this->conexion = null;
        }

        public function crearTabla($nombre)
        {
                $sql = "CREATE TABLE IF NOT EXISTS $nombre ( task_id   int NOT NULL AUTO_INCREMENT, subject varchar(255) DEFAULT NULL, start_date date DEFAULT NULL, end_date date DEFAULT NULL, description varchar(400) DEFAULT NULL, PRIMARY KEY(task_id))";

                /*echo $sql . "<br>";*/
                if ($this->conexion->exec($sql) !== false) {
                        return true;
                } else {
                        return false;
                }
        }
}

$nueva = new conectDB();
echo $nueva->crearTabla("comprar") ? "Se creó la tabla" : "No se creó la tabla";
?>
