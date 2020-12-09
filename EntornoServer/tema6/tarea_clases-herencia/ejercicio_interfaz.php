<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Sergio Andrés Yaccelga Castillo">    
    <meta name="description" content="Ejercicio de implemetación de interfaces">
<title>Interfaz</title>
</head>
<body>
<!-- Hacer una interfaz que tenga como método area() y perimetro(), hacer dos clases que la implementen, Cuadrado()
y Circulo() -->
    <?php
        interface Figuras{
            public function perimetro();
            public function area();
        }
    ?>

    <?php
        class Cuadrado implements Figuras{
            private $base = 0;
            private $altura = 0;
            function __construct($base, $altura){
                $this->base = $base;
                $this->altura = $altura;
            }

            public function perimetro(){
                return 4*$this->base;
            }

            public function area(){
                return $this->altura*$this->base;
            }
        }
        $misdatos = new Cuadrado(3,3);
        echo "El perimetro del cuadrado es: {$misdatos->perimetro()} <br>";
        echo "El area es del cuadrado es: {$misdatos->area()} <br>";
    ?>

    <?php
        class Circulo implements Figuras{
            private $radio = 0;
            function __construct($radio){
                $this->radio = $radio;
            }

            public function perimetro(){
                $resultado = 2*pi()*$this->radio;
                return round($resultado,2);
            }

            public function area(){
                $resultado = pi() * $this->radio * $this->radio;
                return round($resultado,2); 
            }
        }

        $micirculo = new Circulo(10);
        echo "El area es circulo es: {$micirculo->area()} <br>";
        echo "La longitud del circulo es:{$micirculo->perimetro()}";
    ?>
</body>
</html>