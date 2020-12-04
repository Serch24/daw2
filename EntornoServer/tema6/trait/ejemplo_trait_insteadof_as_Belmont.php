<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Belmont">
    <meta name="description" content="">
    <title>YourPage</title>
</head>
<body>
    <?php
      trait Hola {
          public function saludo($nombre) {
              echo "Hola $nombre";
          }
      }

      trait Adios {
          public function saludo($nombre) {
              echo "Adios $nombre";
          }
      }

      class Mensaje {
          use Hola, Adios
            {
                 Hola::saludo insteadOf Adios;
                 Adios:: saludo as despedida;
            } 
      }

      $a = new Mensaje();
      $a->saludo("Paco");
      echo "<br>";
      $b = new Mensaje();
      $b->despedida("Paco");
    ?>
</body>
</html>
