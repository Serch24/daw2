<?php
require_once "./funciones.php";
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

        public function comprobar_usuario($login_user)
        {
                $ok_login = filtrado($login_user);
                if (esta_vacio($ok_login)) {
                        return [
                                "mensaje" => "El campo está vacio!",
                        ];
                }
                $a = $this->conn->prepare(
                        "select login from usuarios where login = :user_login "
                );
                $a->execute([
                        ":user_login" => $ok_login,
                ]);

                if ($a->rowCount() > 0) {
                        return true;
                }
                return [
                        "mensaje" => "Login incorrecto!",
                ];
        }

        public function comprobar_permisos($login_user)
        {
                $perfil = 1;
                $ok_login = filtrado($login_user);
                if (esta_vacio($ok_login)) {
                        return [
                                "mensaje" => "El campo está vacio!",
                        ];
                }
                $a = $this->conn->prepare(
                        "select login from usuarios where login = :user_login and perfil = :perfil"
                );
                $a->execute([
                        ":user_login" => $ok_login,
                        ":perfil" => $perfil,
                ]);

                if ($a->rowCount() > 0) {
                        return true;
                }
                return [
                        "mensaje" => "No tiene los permisos necesarios!",
                ];
        }

        public function comprobar_pass($login, $pass)
        {
                $ok_login = filtrado($login);
                $ok_pass = filtrado($pass);
                if (esta_vacio($ok_pass) || esta_vacio($ok_login)) {
                        return [
                                "mensaje" => "El campo está vacio!",
                        ];
                }

                $a = $this->conn->prepare(
                        "select clave from usuarios where login = :user_login "
                );

                $a->execute([
                        ":user_login" => $ok_login,
                ]);

                if ($a->rowCount() > 0) {
                        $pass_has = password_hash($ok_pass, PASSWORD_DEFAULT, [
                                "cost" => 10,
                        ]);

                        $ha = $a->fetch(PDO::FETCH_OBJ);
                        echo "<pre>";
                        print_r($ha->clave);
                        echo "</pre>";
                        if (password_verify($ha->clave, $pass_has)) {
                                return true;
                        }
                }

                return [
                        "mensaje" => "Password Incorrecta!",
                ];
        }

        public function comprobar_vacunas($vacuna_nombre, $cantidad)
        {
                $ok_vacuna = filtrado($vacuna_nombre);
                $ok_cantidad = filtrado($cantidad);
                if (esta_vacio($ok_vacuna) || esta_vacio($ok_cantidad)) {
                        return [
                                "mensaje" => "El campo está vacio!",
                        ];
                }
                $a = $this->conn->prepare(
                        "select * from vacuna where nombre = :vacuna and cantidad >= :cantida"
                );
                $a->execute([
                        ":vacuna" => $ok_vacuna,
                        ":cantida" => $ok_cantidad,
                ]);

                if ($a->rowCount() > 0) {
                        return true;
                }
                return [
                        "mensaje" => "Vacunas insuficientes!",
                ];
        }

        public function comprobar_suficiente($cant)
        {
                $ok_cant = filtrado($cant);
                if (esta_vacio($ok_cant)) {
                        return [
                                "mensaje" => "El campo está vacio!",
                        ];
                }

                $a = $this->conn->prepare(
                        "select * from censo where vacunada = false"
                );
                $a->execute();

                if ($a->rowCount() > 0) {
                        $iu = $a->fetchAll(PDO::FETCH_OBJ);
                        if (count($iu) >= (int) $ok_cant) {
                                return true;
                        }
                }

                return [
                        "mensaje" => "Personas insuficientes!",
                ];
        }

        /**
         * undocumented function
         *
         * @return void
         */
        public function candidatos($cant)
        {
                $ok_cant = filtrado($cant);
                if (esta_vacio($ok_cant)) {
                        return [
                                "mensaje" => "El campo está vacio!",
                        ];
                }

                $tmp = $this->conn->prepare(
                        "select * from censo where vacunada = false order by fecha_nac limit $ok_cant"
                );
                $tmp->execute();

                return $tmp->fetchAll(PDO::FETCH_OBJ);
        }
}
?>
