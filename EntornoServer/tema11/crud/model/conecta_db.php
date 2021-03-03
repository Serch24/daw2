<?php
require_once "../controller/funciones.php";
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

        /*Falta arreglar los campos en blanco y manejar los errores, el crud ya está hecho*/
        public function insertar_brawl($nombre, $num_start, $num_skin): array
        {
                if (esta_vacio([$nombre, $num_start, $num_skin])) {
                        return [
                                "error" => "Hay campos vacios",
                        ];
                } else {
                        $nombre_mejorado = filtrado($nombre);
                        $start = filtrado($num_start);
                        $skins = filtrado($num_skin);

                        $tmp = $this->conn->prepare(
                                "insert into brawl (nombre,num_start_power,num_skins) values (:nombre, :start, :skin)"
                        );
                        $tmp->execute([
                                ":nombre" => $nombre_mejorado,
                                ":start" => $start,
                                ":skin" => $skins,
                        ]);
                        return $tmp->rowCount() > 0
                                ? [
                                        "mensaje" =>
                                                "Se ha insertado el brawler correctamente",
                                ]
                                : ["mensaje" => "No se insertó ningún brawler"];
                }
        }

        public function actualizar_brawl(
                $id = null,
                $nombre = null,
                $num_start = null,
                $num_skin = null
        ): array {
                if (esta_vacio([$id, $nombre, $num_start, $num_skin])) {
                        return ["error" => "Hay campos vacios"];
                } else {
                        $nombre_mejorado = filtrado($nombre);
                        $id_mejorado = filtrado($id);
                        $start_mejorado = filtrado($num_start);
                        $skins_mejorado = filtrado($num_skin);

                        try {
                                $tmp = $this->conn->prepare(
                                        "UPDATE brawl set nombre=:nombre ,num_start_power=:start, num_skins=:skins where id=:id_m"
                                );
                                $tmp->execute([
                                        ":nombre" => $nombre_mejorado,
                                        ":start" => $start_mejorado,
                                        ":skins" => $skins_mejorado,
                                        ":id_m" => $id_mejorado,
                                ]);
                                return $tmp->rowCount() > 0
                                        ? [
                                                "mensaje" =>
                                                        "Se ha actualizado el brawler correctamente",
                                        ]
                                        : [
                                                "mensaje" =>
                                                        "No se actualizó ningún brawler",
                                        ];
                        } catch (PDOException $e) {
                                return [
                                        "error" =>
                                                "Ocurrió algo" . $e->getLine(),
                                ];
                        }
                }
        }

        public function borrar_brawl($id, $nombre): array
        {
                if (esta_vacio([$id, $nombre])) {
                        return ["error" => "Hay campos en blanco"];
                } else {
                        $id_mejorado = filtrado($id);
                        $nombre_mejorado = filtrado($nombre);

                        try {
                                $tmp = $this->conn->prepare(
                                        "DELETE FROM brawl WHERE id = :id and nombre = :nombre"
                                );
                                $tmp->execute([
                                        ":id" => $id_mejorado,
                                        ":nombre" => $nombre_mejorado,
                                ]);
                                return $tmp->rowCount() > 0
                                        ? [
                                                "mensaje" =>
                                                        "Se ha borrado el brawler correctamente",
                                        ]
                                        : [
                                                "mensaje" =>
                                                        "No se borró ningún brawler",
                                        ];
                        } catch (PDOException $e) {
                                return [
                                        "error" =>
                                                "Ocurrió un error al borrar" .
                                                $e->getMessage(),
                                ];
                        }
                }
        }

        public function ver_brawl(): array
        {
                $tmp = $this->conn->query("select * from brawl");
                if (!$tmp) {
                        return ["error" => "Error en la consulta"];
                }
                if ($tmp->rowCount() === 0) {
                        return ["error" => "No hay datos que mostrar"];
                } else {
                        return $tmp->fetchAll(PDO::FETCH_ASSOC);
                }
        }
}
?>
