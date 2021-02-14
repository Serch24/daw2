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
        public function __destruct(): void
        {
                // Cierra conexión asignándole valor null
                $this->conn = null;
        }

        public function __clone(): void
        {
                trigger_error("no se puede honey", E_USER_ERROR);
        }

        public static function singleton($database = "test"): self
        {
                if (!isset(self::$instancia)) {
                        $miclase = __CLASS__;
                        self::$instancia = new $miclase($database);
                }
                return self::$instancia;
        }

        public function existe($usuario): bool
        {
                $tmp = $this->conn->prepare(
                        "select * from usuarios where login = :login"
                );
                $tmp->execute([
                        ":login" => $usuario,
                ]);
                return $tmp->rowCount() > 0 ? true : false;
        }

        public function comprobar($usuario, $passwd): array
        {
                if (!$this->existe($usuario)) {
                        return [
                                "error" => "No existe el usuario",
                        ];
                }

                $tmp = $this->conn->prepare(
                        "select * from usuarios where login = :login"
                );

                $tmp->execute([
                        ":login" => $usuario,
                ]);

                if ($tmp->rowCount() === 0) {
                        return [
                                "error" => "No se encontró nada",
                        ];
                }

                $datos = $tmp->fetch(PDO::FETCH_ASSOC);
                if (password_verify($passwd, $datos["passwd"])) {
                        return [
                                "mensaje" => "Datos correctos, Bienvenido!",
                        ];
                } else {
                        return [
                                "error" => "contraseña incorrecta",
                        ];
                }
        }
        public function insertar(): void
        {
                /* login sergio password 1234*/
                $hash = password_hash("1234", PASSWORD_BCRYPT, ["cost" => 11]);
                $this->conn->query(
                        "insert into usuarios(login,passwd)values('sergio','$hash')"
                );
        }
}
?>
