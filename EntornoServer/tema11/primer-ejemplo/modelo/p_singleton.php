<?php
include_once "funciones.php";
class conectaBD
{
        private $conn = null;
        private static $instancia;
        private function __construct($database = "test")
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

        public function __clone()
        {
                trigger_error("no se puede honey", E_USER_ERROR);
        }

        public static function singleton($database = "test")
        {
                if (!isset(self::$instancia)) {
                        $miclase = __CLASS__;
                        self::$instancia = new $miclase($database);
                }
                return self::$instancia;
        }

        public function consulta()
        {
                $tmp = $this->conn->prepare("select * from brawl");
                $tmp->execute();
                return $tmp->fetch(PDO::FETCH_ASSOC);
        }
}
?>
