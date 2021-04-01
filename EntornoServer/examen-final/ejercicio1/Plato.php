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
                $resultado = [];
                foreach ($this->ingredientes_cantidad as $v) {
                        $alr = $v[0]->alergeno;
                        if ($alr != null) {
                                $resultado = $alr;
                        }
                }
                return empty($resultado) ? false : $resultado;
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

?>
