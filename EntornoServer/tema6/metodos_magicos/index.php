<?php
class Figura{ 
    private $nombre;
    private $color;
    private $esRellena;

    public function __construct($nombre_figu){
        $this->nombre = $nombre_figu;
    }

     public function getNombre(){
        return $this->nombre;
    
    }

    final public function  setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getColor(){
            return $this->color;
    }

     public function setColor($color){
            $this->color=$color;

     }

    public function estaRellena(){
            return $this->esRellena?"Esta rellena":"No esta rellena";
    }

    public function estaVacia(){
        return $this->esRellena;
    }

    public function showInfo(){
        return "NOmbre: {$this->nombre}, color: {$this->color}, {$this->estaRellena()}";
    }

}
?>
<?php
    class Circulo extends Figura{
        private $radio;

        public function __construct($nombre,$radio){
            parent::__construct($nombre);
            $this->radio = $radio;

        }
        public function getRadio(){
            return $this->radio;
        }

        public function setRadio($radio){
            $this->radio = $radio;
        }

        public function getArea(){
            return pi()*$this->getRadio()*$this->getRadio();
        }

        public function getNombre()
        {
            return strcmp(parent::getNombre(),"cirulo")==0? parent::getNombre(): "circulo"; 
        }
        /*Si funciona :D*/
        /*public function setNombre($nombre){
            parent::setNombre($nombre);
        }*/


    }

?>

<?php
    class Cuadrado extends Figura{
        private $lado;

        public function __construct($nombre,$lado)
        {
                parent::__construct($nombre);
                $this->lado= $lado;

        }

        public function getLado(){
            return $this->lado;
        }

        public function setLado($lado){
                $this->lado = $lado;
        }

        public function getArea(){
            return $this->lado*$this->lado;
        }

    }
?>

<?php
?>
