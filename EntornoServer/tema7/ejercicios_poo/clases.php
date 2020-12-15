<?php
   interface Imprimible{
      public function imprime();
   }

?>

<?php
   abstract class Figura{
     private $nombre;
     private $color;
     private $esRellena;

     public function __construct($nombre,$color,$esrellena){
         $this->nombre = $nombre; 
         $this->color = $color;
         $this->esRellena = $esrellena;
     } 
     public function getNombre(){
         return $this->nombre;
     }
     public final function setNombre($nombre){
         $this->nombre = $nombre;
     }
     public function getColor(){
         return $this->color;
     }
     public function setColor($color){
         $this->color = $color;
     }
     public function estaRellena(){
         return $this->esRellena? "si esta rellena":"no esta rellena";
     }
     public function estaVacia(){
         return $this->esRellena;
     }
     public function showinfo(){
         echo "nombre: {$this->nombre}, color: {$this->color}, {$this->estaRellena()}";
     }
     public abstract function getArea();

   } 
   
?>

<?php
   class Circulo extends Figura{
      private $radio;
      public function __construct($nombre,$color,$esrellena,$radio)
      {
              parent::__construct($nombre,$color,$esrellena);
              $this->radio=$radio;
      }
      
      public function getArea(){
         return PI()*$this->radio**2;

      }
       public function setArea($radio){
         $this->radio = $radio;
      
      }       
     
      public function getNombre()
      {
              return "circulo";
      }
      public function showinfo()
      {
              return parent::showinfo() . ", radio: {$this->getArea()}";
      } 


   }

?>

<?php
   class Cuadrado extends Figura implements Imprimible{
      private $lado;

      public function __construct($nombre,$color,$esrellena,$lado)
      {
              parent::__construct($nombre,$color,$esrellena);
              $this->lado = $lado;       
      }
      public function getArea(){
         return $this->lado *  $this->lado;
      }
      public function setArea($lado){
         $this->lado = $lado;
      } 
        public function showinfo()
      {
              return parent::showinfo() . ", area : {$this->getArea()}";
      }  
      public function imprime()
      {
              if(strcmp(parent::estaRellena(),"si esta rellena")==0){
                  return $this->showInfo(); 
              }else{
                  return 0;
              }
      }

   }

?>

<?php
   class Rectangulo extends Figura{
     public function getArea()
     {
            return "aquí va el area del rectangulo";
     } 

   }
   /*$w = new Cuadrado("cuadrado","azul","true",4);
   echo $w->imprime();*/

?>
