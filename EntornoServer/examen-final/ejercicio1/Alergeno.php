<?php
class Alergeno
{
        private $alergeno;
        private $colorR;
        private $colorG;
        private $colorB;

        public function __construct($nombre, $rojo, $verde, $azul)
        {
                $this->alergeno = $nombre;
                $this->colorR = $rojo;
                $this->colorG = $verde;
                $this->colorB = $azul;
        }

        public function getColor(&$color1, &$color2, &$color3)
        {
        }
}

?>
