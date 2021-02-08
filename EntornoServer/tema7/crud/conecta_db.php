<?php
include_once "funciones.php";
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
        public function insertar_brawl($nombre, $num_start, $num_skin)
        {
                if (esta_vacio([$nombre, $num_start, $num_skin])) {
                        echo "<h1>Hay campos en blanco</h1>";
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
                        echo $tmp->rowCount() > 0
                                ? "<h1>Se ha insertado el brawler correctamente</h1>"
                                : "<h1>No se insertó ningún brawler</h1>";
                }
        }
        public function actualizar_brawl(
                $id = null,
                $nombre = null,
                $num_start = null,
                $num_skin = null
        ) {
                if (esta_vacio([$id, $nombre, $num_start, $num_skin])) {
                        echo "<h1>Hay campos vacios</h1>";
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
                                echo $tmp->rowCount() > 0
                                        ? "<h1>Se ha actualizado el brawler correctamente</h1>"
                                        : "<h1>No se actualizó ningún brawler</h1>";
                        } catch (PDOException $e) {
                                echo "Ocurrió algo" . $e->getLine();
                        }
                }
        }

        public function borrar_brawl($id, $nombre)
        {
                if (esta_vacio([$id, $nombre])) {
                        echo "<h1>Hay campos en blanco</h1>";
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
                                echo $tmp->rowCount() > 0
                                        ? "<h1>Se ha borrado el brawler correctamente</h1>"
                                        : "<h1>No se borró ningún brawler</h1>";
                        } catch (PDOException $e) {
                                echo "<h1>Ocurrió un error al borrar</h1>";
                        }
                }
        }

        public function ver_brawl()
        {
                $tmp = $this->conn->query("select * from brawl");
                if (!$tmp) {
                        return null;
                }
                if ($tmp->rowCount() === 0) {
                        echo "No hay datos que mostrar";
                } else {
                        echo "<table>";
                        echo "<tbody>";
                        echo <<<EOF
      <tr>
         <th>id</th>
         <th>nombre</th>
         <th>numero de start power</th>
         <th>numero de skins</th>
      </tr>
EOF;
                        foreach ($tmp->fetchAll(PDO::FETCH_OBJ) as $v) {
                                echo <<<EOF
      <tr>
         <td>{$v->id}</td>
         <td >{$v->nombre}</td>
         <td >{$v->num_start_power}</td>
         <td >{$v->num_skins}</td>
      </tr>
EOF;
                        }
                        echo "</tbody></table>";
                }
        }
}
?>
