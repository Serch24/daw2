<?php
class Plato
{
        private $nombre;
        private $ingredientes_cantidad;

        public function __construct($nombre_plato)
        {
                $this->nombre = $nombre_plato;
                $this->ingredientes_cantidad = [];
        }

        public function add($nom_plato, $cantidad)
        {
                $this->ingredientes_cantidad[] = [$nom_plato, $cantidad];
        }

        public function getAlergenos()
        {
                for ($i = 0; $i < count($this->ingredientes_cantidad); $i++) {
                        print_r($this->ingredientes_cantidad[$i]);
                }
        }

        public static function precio()
        {
                return true;
        }
        public function calorias()
        {
                return true;
        }

        public function muestraPlato()
        {
                ?>
                     <ul>
                             <li></li>
                     </ul>
                <?php
        }
}
$a = new Plato("arroz");
$a->add("nose", 3);
$a->add("nose", 3);
$a->getAlergenos();

?>
