<?php
class PlatoPreparado extends Plato
{
        private $fecha_elaboracion;
        private $num_dias;

        public function __construct($nombre_p, $dias = 4)
        {
                parent::__construct($nombre_p);
                $this->num_dias = $dias;
                $this->fecha_elaboracion = date("Y-m-d");
        }

        public function getFechaCaducidad()
        {
        }

        public function muestraPlato()
        {
                return parent::muestraPlato() .
                        " " .
                        $this->getFechaCaducidad();
        }

        public function add($nom_plato, $cantidad)
        {
                return parent::add($nom_plato, $cantidad);
        }
}

?>
