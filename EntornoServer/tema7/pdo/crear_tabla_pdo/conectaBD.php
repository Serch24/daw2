<?php
class conectaBD
{
        private $conn = null;
        public function __construct($database = "test")
        {
                $dsn = "mysql:host=mysql;dbname=$database;charset=utf8";
                try {
                        $this->conn = new PDO($dsn, "root", "1234", [
                                PDO::ATTR_PERSISTENT => true,
                        ]);
                } catch (PDOException $e) {
                        die("¡Error!: " . $e->getMessage() . "<br/>");
                }
        }
        public function __destruct()
        {
                // Cierra conexión asignándole valor null
                $this->conn = null;
        }
        public function creaTablaTask()
        {
                // Crea tabla; devuelve TRUE si tiene exito y FALSE en caso contrario
                $sql = 'CREATE TABLE IF NOT EXISTS tasks ( task_id int NOT NULL AUTO_INCREMENT,
				subject varchar(255) DEFAULT NULL,
				start_date date DEFAULT NULL,
				end_date date DEFAULT NULL,
				description varchar(400) DEFAULT NULL,
				PRIMARY KEY (task_id)
				);';
                if ($this->conn->exec($sql) !== false) {
                        return true;
                }
                return false;
        }

        public function consultaTareas($fila_inicio, $num_filas)
        {
                if (!is_numeric($num_filas) or !is_numeric($fila_inicio)) {
                        echo "<h1>Las variables deben ser numeros!!!</h1>";
                        exit();
                }
                try {
                        if ($this->totalFIlas() === 0) {
                                echo "<p>NO hay filas para mostrar</p>";
                                exit();
                        } elseif (
                                $this->totalFIlas() <
                                $num_filas - $fila_inicio
                        ) {
                                echo "<p>NO hay tantas filas</p>";
                                exit();
                        } else {
                                $resul = $this->conn->query(
                                        "select * from tasks limit $fila_inicio,$num_filas"
                                );

                                //se muestran las filas
                                foreach (
                                        $resul->fetchAll(PDO::FETCH_ASSOC)
                                        as $value
                                ) {
                                        foreach ($value as $value2) {
                                                echo "<p>$value2</p>";
                                        }
                                }
                        }
                } catch (PDOException $e) {
                        echo "error" . $e->getMessage();
                }
        }

        public function totalFIlas()
        {
                $num_filas = $this->conn->query("select * from tasks");
                if (!$num_filas) {
                        echo "<h1>error en la conexión</h1>";
                        exit();
                }
                $tmp = count($num_filas->fetchAll(PDO::FETCH_ASSOC));
                return $tmp > 0 ? $tmp : 0;
        }
}

?>
