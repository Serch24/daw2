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
                        $this->conn = new PDO($dsn, "alumno", "1234", [
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

        public function comprobar_login($login_user)
        {
                $ok_login = filtrado($login_user);
                if (esta_vacio($ok_login)) {
                        return [
                                "mensaje" => "El campo está vacio!",
                        ];
                }
                $a = $this->conn->prepare(
                        "select login from acceso where login = :user_login "
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

        /**
         * undocumented function
         *
         * @return void
         */
        public function comprobar_evento($fecha_ev, $hora_ev)
        {
                $ok_fecha = filtrado($fecha_ev);
                $ok_hora = filtrado($hora_ev);

                if (esta_vacio($ok_fecha) || esta_vacio($ok_hora)) {
                        return [
                                "mensaje" => "Hay un campo vacio!",
                        ];
                }

                $tmp = $this->conn->prepare(
                        "select fechaEvento, horaEvento from evento where fechaEvento = :fecha and horaEvento = :hora"
                );
                $tmp->execute([
                        ":fecha" => $ok_fecha,
                        ":hora" => $ok_hora,
                ]);

                return $tmp->rowCount() > 0
                        ? [
                                "mensaje" => "Coincide con otro evento",
                        ]
                        : true;
                return null;
        }

        /**
         * undocumented function
         *
         * @return void
         */
        public function comprobar_hora_fecha($fecha, $hora)
        {
                $ok_fecha = filtrado($fecha);
                $ok_hora = filtrado($hora);

                if (esta_vacio($ok_fecha) || esta_vacio($ok_hora)) {
                        return [
                                "mensaje" => "Hay un campo vacio!",
                        ];
                }

                $ahora = date("Y-m-d H:i");
                $despues = date($ok_fecha . " " . $ok_hora);
                return $ahora < $despues
                        ? true
                        : [
                                "mensaje" => "La fecha ya ha pasado",
                        ];
        }

        /**
         * undocumented function
         *
         * @return void
         */
        public function comprobar_letra($cadena)
        {
                $ok_cadena = filtrado($cadena);
                if (esta_vacio($ok_cadena)) {
                        return [
                                "mensaje" => "Hay un campo vacio!",
                        ];
                }

                $pri = substr($ok_cadena, 0, 1);
                return is_numeric($pri)
                        ? [
                                "mensaje" => "Nombre del evento incorrecto",
                        ]
                        : true;

                return null;
        }

        /**
         * undocumented function
         *
         * @return void
         */
        public function dar_alta($datos)
        {
                $login = $datos["login"];
                $nom = $datos["nombre_evento"];
                $desc = $datos["descripcion"];
                $fec = $datos["fecha_validez"];
                $ho = $datos["hora_evento"];
                $lu = $datos["lugar"];
                $tmp = $this->conn->query(
                        "insert into evento (login,nomEvento,descEvento,fechaEvento,horaEvento,lugarEvento) values $login,$nom,$desc,$fec,$ho,$lu"
                );
                return [
                        "mensaje" => "Se ha dado de alta",
                ];
        }
}
?>
