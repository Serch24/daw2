<?php
require "./funciones.php";
class conectaBD
{
        private $conn = null;
        private static $instancia;
        private function __construct()
        {
                /*$dsn = "mysql:host=192.168.98.90;charset=utf8";*/
                $dsn = "mysql:host=mysql;charset=utf8";
                try {
                        $this->conn = new PDO($dsn, "root", "1234", [
                                PDO::ATTR_PERSISTENT => true,
                        ]);
                } catch (PDOException $e) {
                        return [
                                "mensaje" => "Error!! " . $e->getMessage(),
                        ];
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

        public function creardb($arr)
        {
                $ok_db = filtrado($arr);

                if (esta_vacio($ok_db)) {
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

        public function crear_tabla($dato)
        {
                $query = $dato->info->query;
                $nombredb = $dato->info->nombredb;

                $ok_nombredb = filtrado($nombredb);

                if (esta_vacio($query) || esta_vacio($ok_nombredb)) {
                        return json_encode([
                                "mensaje" => "El campo está vacio",
                        ]);
                }
                $a = explode(" ", $query);
                $msg = "";
                for ($i = 0; $i < count($a); $i++) {
                        if (
                                strcmp($a[$i], "table") == 0 ||
                                strcmp($a[$i], "TABLE") == 0
                        ) {
                                $msg .= $a[$i] . " $ok_nombredb.";
                        } else {
                                $msg .= $a[$i] . " ";
                        }
                }
                /*return $msg;*/
                try {
                        $tmp = $this->conn->query($msg);
                        if ($tmp) {
                                return json_encode([
                                        "mensaje" => "Tabla creada",
                                ]);
                        } else {
                                return json_encode([
                                        "mensaje" => "Algo pasó",
                                ]);
                        }
                } catch (PDOException $e) {
                        return json_encode([
                                "mensaje" => "Error en la consulta",
                        ]);
                }
        }

        public function insertar($dato)
        {
                $query = $dato->info->query;
                $nombredb = $dato->info->nombredb;

                $ok_nombredb = filtrado($nombredb);

                if (esta_vacio($query) || esta_vacio($ok_nombredb)) {
                        return json_encode([
                                "mensaje" => "El campo está vacio",
                        ]);
                }
                $a = explode(" ", $query);
                $msg = "";
                for ($i = 0; $i < count($a); $i++) {
                        if (
                                strcmp($a[$i], "into") == 0 ||
                                strcmp($a[$i], "INTO") == 0
                        ) {
                                $msg .= $a[$i] . " $ok_nombredb.";
                        } else {
                                $msg .= $a[$i] . " ";
                        }
                }
                /*return $msg;*/
                try {
                        $tmp = $this->conn->query($msg);
                        if ($tmp) {
                                return json_encode([
                                        "mensaje" => "Dato insertado",
                                ]);
                        } else {
                                return json_encode([
                                        "mensaje" => "Algo pasó",
                                ]);
                        }
                } catch (PDOException $e) {
                        return json_encode([
                                "mensaje" => "Error en la consulta",
                        ]);
                }
        }

        public function actualizar($dato)
        {
                $query = $dato->info->query;
                $nombredb = $dato->info->nombredb;

                $ok_nombredb = filtrado($nombredb);

                if (esta_vacio($query) || esta_vacio($ok_nombredb)) {
                        return json_encode([
                                "mensaje" => "El campo está vacio",
                        ]);
                }
                $a = explode(" ", $query);
                $msg = "";
                for ($i = 0; $i < count($a); $i++) {
                        if (
                                strcmp($a[$i], "update") == 0 ||
                                strcmp($a[$i], "UPDATE") == 0
                        ) {
                                $msg .= $a[$i] . " $ok_nombredb.";
                        } else {
                                $msg .= $a[$i] . " ";
                        }
                }
                /*return $msg;*/
                try {
                        $tmp = $this->conn->query($msg);
                        if ($tmp) {
                                return json_encode([
                                        "mensaje" => "Dato actualizado",
                                ]);
                        } else {
                                return json_encode([
                                        "mensaje" => "Algo pasó",
                                ]);
                        }
                } catch (PDOException $e) {
                        return json_encode([
                                "mensaje" => "Error en la actualizacion",
                        ]);
                }
        }

        public function eliminar($dato)
        {
                $query = $dato->info->query;
                $nombredb = $dato->info->nombredb;

                $ok_nombredb = filtrado($nombredb);

                if (esta_vacio($query) || esta_vacio($ok_nombredb)) {
                        return json_encode([
                                "mensaje" => "El campo está vacio",
                        ]);
                }
                $a = explode(" ", $query);
                $msg = "";
                for ($i = 0; $i < count($a); $i++) {
                        if (
                                strcmp($a[$i], "from") == 0 ||
                                strcmp($a[$i], "FROM") == 0
                        ) {
                                $msg .= $a[$i] . " $ok_nombredb.";
                        } else {
                                $msg .= $a[$i] . " ";
                        }
                }
                /*return $msg;*/
                try {
                        $tmp = $this->conn->query($msg);
                        if ($tmp) {
                                return json_encode([
                                        "mensaje" => "Dato eliminado",
                                ]);
                        } else {
                                return json_encode([
                                        "mensaje" => "Algo pasó",
                                ]);
                        }
                } catch (PDOException $e) {
                        return json_encode([
                                "mensaje" => "Error en la elimicacion",
                        ]);
                }
        }

        public function ver($dato)
        {
                $query = $dato->info->query;
                $nombredb = $dato->info->nombredb;

                $ok_nombredb = filtrado($nombredb);

                if (esta_vacio($query) || esta_vacio($ok_nombredb)) {
                        return json_encode([
                                "mensaje" => "El campo está vacio",
                        ]);
                }

                $a = explode(" ", $query);
                $msg = "";
                for ($i = 0; $i < count($a); $i++) {
                        if (
                                strcmp($a[$i], "from") == 0 ||
                                strcmp($a[$i], "FROM") == 0
                        ) {
                                $msg .= $a[$i] . " $ok_nombredb.";
                        } else {
                                $msg .= $a[$i] . " ";
                        }
                }
                /*return $msg;*/
                try {
                        $tmp = $this->conn->prepare($msg);
                        $tmp->execute();
                        if ($tmp->rowCount() > 0) {
                                return json_encode(
                                        $tmp->fetchAll(PDO::FETCH_OBJ)
                                );
                        } else {
                                return json_encode([
                                        "mensaje" =>
                                                "Datos erroneos de consulta",
                                ]);
                        }
                } catch (PDOException $e) {
                        return json_encode([
                                "mensaje" => "Error en la consulta",
                        ]);
                }
        }
}
?>
