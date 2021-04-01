<?php
class conectaBD
{
        private $conn = null;
        private static $instancia;
        private function __construct($database = "test")
        {
                $dsn = "mysql:host=ddbb;dbname=$database;charset=utf8";
                try {
                        $this->conn = new PDO($dsn, "root", "Nohay2sin3", [
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
        /**
         * undocumented function
         *
         * @return void
         */
        public function comprobarCuenta($numero_cuenta)
        {
                $tmp = $this->conn->prepare(
                        "select * from cuentas where cu_ncu=$numero_cuenta"
                );
                $tmp->execute();
                if ($tmp->rowCount() > 0) {
                        return json_encode([
                                "mensaje" => "Existe la cuenta",
                        ]);
                }
                return json_encode([
                        "mensaje" => "No existe la cuenta",
                ]);
        }

        public function comprobarDniTitular($dni)
        {
                $tmp = $this->conn->prepare(
                        "select * from cuentas where cu_dn1=$dni"
                );
                $tmp->execute();
                if ($tmp->rowCount() > 0) {
                        return json_encode([
                                "mensaje" => "Existe el dni",
                        ]);
                }
                return json_encode([
                        "mensaje" => "No existe el dni",
                ]);
        }
}
