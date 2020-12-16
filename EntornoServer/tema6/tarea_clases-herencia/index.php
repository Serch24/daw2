<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Sergio Andrés Yaccelga Castillo">
    <meta name="description" content="Ejercicio de herencia de animales">
    <title>Herencia</title>
</head>
<body>
    <!-- Tiene que existir una clase Animal que tenga como atributos el nombre del animal, peso del animal y la edad, debe haber un metodo toString. Debe haber una clase Gato y otra clase Perro, deben heredar a Animal e implementar otros atributos y metodos, también deben tener un toString() -->
    <?php
        class Animal{
            private $nombre_animal;
            private $kg;
            private $edad;

            function __construct($nombre,$kg,$edad){
                $this->nombre_animal = $nombre;
                $this->kg = $kg;
                $this->edad = $edad;
            }

            function mostrar(){
                echo "Nombre: {$this->nombre_animal}, kg: {$this->kg}, edad: {$this->edad}\n";
            }

        }

    ?>

    <?php
        class Perro extends Animal{
            private $ladrar=false;
            private $correr=false;
            
            function __construct($nombre,$kg,$edad,$ladra,$corre){
                parent::__construct($nombre,$kg,$edad);
                $this->ladrar = $ladra;
                $this->correr = $corre;
            }
            function isLadrido(){
                return $this->ladrar? "si ladra" : "no ladra";
            }

            function isCorrer(){    
                return $this->correr? "si corre" : "no corre";
            }

            function toString(){
                return parent::mostrar() . ", {$this->isLadrido()} , {$this->isCorrer()}";
            }

        }
        /* $miperro = new Perro("perro",8,2,FALSE,TRUE);
        echo $miperro->toString(); */
    ?>

    <?php
        class Gato extends Animal{
            private $correr=false;
            private $color="";
            private $nombre_duenio="";
            
            function __construct($nombre,$kg,$edad,$corre,$color,$duenio){
                parent::__construct($nombre,$kg,$edad);
                $this->correr = $corre;
                $this->color = $color;
                $this->nombre_duenio = $duenio;
            }

            function isCorrer(){    
                return $this->correr? "si corre" : "no corre";
            }

            function toString(){
                return parent::mostrar() . " es de color {$this->color} y su dueño es {$this->nombre_duenio}, {$this->isCorrer()}";
            }
        }

        /* $elgato = new Gato("felix",10,5,TRUE,"blue","sergio");
        echo $elgato->toString(); */
    ?>
</body>
</html>
