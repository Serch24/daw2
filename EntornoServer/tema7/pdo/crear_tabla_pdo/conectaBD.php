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
                $num_rows = 0;
                try {
                        $tmp = $this->conn->query("select count(*) from tasks");
                        $tmp->setFetchMode(PDO::FETCH_ASSOC);
                        while ($a = $tmp->fetch()) {
                                $num_rows = $a["count(*)"];
                        }
                        if ((int) $num_rows < (int) $num_filas) {
                                echo "no se puede";
                        } else {
                                echo "siisisisis";
                        }
                } catch (PDOException $e) {
                        echo "error" . $e->getMessage();
                }
        }
}

?>
