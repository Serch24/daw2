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
                $pass_hasheada = hash("sha512", $passwd);
                $tmp = $this->conn->query(
                        "select * from usuarios where nombre_usuario = '$usuario' and passwd_hash = '$pass_hasheada'"
                );
                if ($tmp->rowCount() > 0) {
                        $nombre = $tmp->fetchAll(PDO::FETCH_ASSOC);
                        echo "<h1>Bienvenido {$nombre[0]["nombre_usuario"]}</h>";
                } else {
                        echo "<h1>Permiso denegado</h1>";
                        exit();
                }
        }
}
/*$prueba = conectaBD::singleton("dwes");
 $prueba->comprobar("andres", 4444);*/
echo $pa = password_hash("sergio", PASSWORD_BCRYPT, ["cost" => 15]);
echo "<br>";
echo password_verify("sergio", $pa) ? "yes" : "no";
?>
