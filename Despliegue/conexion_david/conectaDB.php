<?php
require "./funciones.php";
class conectaBD
{
        private $conn = null;
        private static $instancia;
        private function __construct()
        {
                $dsn = "mysql:host=mysql;charset=utf8";
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

        public static function singleton()
        {
                if (!isset(self::$instancia)) {
                        $miclase = __CLASS__;
                        self::$instancia = new $miclase();
                }
                return self::$instancia;
        }

        public function crear($arr)
        {
                $ok_table = filtrado($arr->valor_table);
                $ok_db = filtrado($arr->valor_db);

                if (esta_vacio($ok_db) || esta_vacio($ok_table)) {
                        return json_encode([
                                "mensaje" => "El campo está vacio",
                        ]);
                }

                $a = $this->conn->prepare("create database $ok_db");
                try {
                        $a->execute();
                } catch (PDOException $e) {
                        return json_encode([
                                "mensaje" =>
                                        "Ya existe ese nombre en la base de datos",
                        ]);
                }
                return json_encode([
                        "mensaje" => "Database ha sido creado",
                ]);
        }
}
?>
