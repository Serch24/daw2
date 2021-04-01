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

                if (is_array($tipo_, range(self::ANIMAL, self::LACTREO))) {
                        $this->tipo = $tipo_;
                } else {
                        $this->tipo = self::SINCALIFICAR;
                }

                /*if ($tipo_) {
                        if (
                                $tipo_ == self::ANIMAL ||
                                $tipo_ == self::VEGETAL ||
                                $tipo_ == self::LACTREO
                        ) {
                                $this->tipo = $tipo_;
                        } else {
                                $this->tipo = self::SINCALIFICAR;
                        }
                } else {
                        $this->tipo = self::SINCALIFICAR;
                }*/

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
