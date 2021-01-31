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

        public function insertar_brawl($nombre, $num_start, $num_skin)
        {
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
                echo "<h1>Se ha insertado un registro con éxito</h1>";
        }
        public function actualizar_brawl(
                $nombre = null,
                $num_start = null,
                $num_skin = null
        ) {
        }

        public function borrar_brawl($id, $nombre)
        {
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
                } catch (PDOException $e) {
                        echo "<h1>Ocurrió un error</h1>";
                        return false;
                }
                echo "<h1>Borrado exitoso</h1>";
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
                        echo "<table style='width: 26%;' border='1'>";
                        echo "<tbody>";
                        echo <<<EOF
      <tr>
         <th>id</th>
         <th>nombre</th>
         <th>numero de start power</th>
         <th>numero de skins</th>
      </tr>
EOF;
                        foreach ($tmp->fetchAll(PDO::FETCH_ASSOC) as $v) {
                                echo <<<EOF
      <tr>
         <td>{$v["id"]}</td>
         <td >{$v["nombre"]}</td>
         <td >{$v["num_start_power"]}</td>
         <td >{$v["num_skins"]}</td>
      </tr>
EOF;
                        }
                        echo "</tbody></table>";
                }
        }
}
?>
