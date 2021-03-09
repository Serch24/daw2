<?php
class Ingrediente
{
        const ANIMAL = 1;
        const VEGETAL = 2;
        const LACTREO = 3;
        const SINCALIFICAR = 4;

        private $nombre;
        private $calorias;
        private $precio;
        private $tipo;
        private $alergeno;

        public function __construct(
                $nombre_,
                $calorias_,
                $precio_,
                $tipo_,
                $alergeno_ = null
        ) {
                $this->nombre = $nombre_;
                $this->calorias = $calorias_;
                $this->precio = $precio_;
                $this->tipo = $tipo_;
                $this->alergeno = $alergeno_;
        }

        public function __get($name)
        {
                if (isset($this->$name)) {
                        return $this->$name;
                } else {
                        return "Nope";
                }
        }
}
?>
