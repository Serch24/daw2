<?php
class conectaBD
{
        private $conn = null;
        private static $instancia;
        private function __construct($database = "test")
        {
                $dsn = "mysql:host=mysql;dbname=$database;charset=utf8";
                try {
                        $this->conn = new PDO($dsn, "sergio", "1234", [
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

        public function insertar_brawl($nombre, $num_start, $num_skin)
        {
        }
        public function actualizar_brawl(
                $nombre = null,
                $num_start = null,
                $num_skin = null
        ) {
        }

        public function borrar_brawl($id, $nombre)
        {
        }

        public function ver_brawl()
        {
                $tmp = $this->conn->query("select * from brawl");
                if (!$tmp) {
                        return null;
                }
                return $tmp->rowCount() === 0 ? null : $tmp;
        }
}
?>
