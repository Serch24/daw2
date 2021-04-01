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
         *
         *
         * @return void
         */
        public function crearTablaCLiente()
        {
                $sql =
                        "CREATE TABLE clientes (cl_dni VARCHAR(9) NOT NULL, " .
                        "cl_nom VARCHAR(50) NOT NULL, " .
                        "cl_dir VARCHAR(60) NOT NULL, " .
                        "cl_tel VARCHAR(9) NOT NULL, " .
                        "cl_ema VARCHAR(65) NOT NULL, " .
                        "cl_fna DATE, " .
                        "cl_fcl DATE NOT NULL," .
                        "cl_ncu TINYINT(2) NOT NULL, " .
                        "cl_sal INT(8) NOT NULL," .
                        "PRIMARY KEY (cl_dni)) ENGINE = MYISAM;";

                $tmp = $this->conn->prepare($sql);
                $tmp->execute();
                return [
                        "mensaje" => "Todo ok",
                ];
        }

        public function crearTablaCuentas()
        {
                $sql =
                        "CREATE TABLE cuentas (cu_ncu VARCHAR(10) NOT NULL, " .
                        "cu_dn1 VARCHAR(9) NOT NULL, " .
                        "cu_dn2 VARCHAR(9), " .
                        "cu_sal INT(8) NOT NULL, " .
                        "PRIMARY KEY (cu_ncu), " .
                        "FOREIGN KEY (cu_dn1, cu_dn2) REFERENCES clientes(cl_dni, cl_dni)" .
                        ") ENGINE = MYISAM;";
                $tmp = $this->conn->prepare($sql);
                $tmp->execute();
                return [
                        "mensaje" => "Todo ok",
                ];
        }

        public function crearTablaMovimiento()
        {
                $sql =
                        "CREATE TABLE movimientos (mo_ncu VARCHAR(10) NOT NULL, " .
                        "mo_fec DATE NOT NULL, " .
                        "mo_hor VARCHAR(6) NOT NULL, " .
                        "mo_des VARCHAR(80) NOT NULL, " .
                        "mo_imp INT(8) NOT NULL, " .
                        "PRIMARY KEY (mo_ncu, mo_fec, mo_hor)) ENGINE = MYISAM;";
                $tmp = $this->conn->prepare($sql);
                $tmp->execute();
                return [
                        "mensaje" => "Todo ok",
                ];
        }
}
?>
