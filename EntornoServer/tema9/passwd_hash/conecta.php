<?php
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

        public function comprobar($usuario, $passwd)
        {
                /*hash usado sha512*/
                $pass_hasheada = hash("sha512", $passwd);

                $tmp = $this->conn->prepare(
                        "select * from usuarios where login = :usuario and clave_hash = :pass"
                );
                $tmp->execute([
                        ":usuario" => $usuario,
                        ":pass" => $pass_hasheada,
                ]);

                if ($tmp->rowCount() > 0) {
                        $nombre = $tmp->fetch(PDO::FETCH_ASSOC);
                        return $nombre["login"];
                } else {
                        return false;
                }
        }
}
?>
