<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="Sergio Andrés" content="Yaccelga Castillo">
    <title>Bucles con break</title>
</head>
<body>
    <?php
         function primo($n)
         /* EJ1. Dado un número indicar si es primo o no. Uso de break. */
        {
            do {
                if ($n == 2 || $n == 3 || $n == 5 || $n == 7) {
                    echo "<h1>Es primo</h1>";    
                break;
                }
                else if($n%2 == 0 ||$n%3 == 0 || $n%5 == 0 || $n%7 == 0){
                    echo "<h1>No es primo</h1>";
                    break;
                }else{
                    echo "<h1>Es prim00</h1>";
                break;
                }
                    
            } while (!$flag);
        }
    
        function continuee()
        {
            /* EJ2. Obtener 10 números aleatorios del 1 al 100, 
            pero ignorar los números múltiplos de 7. Uso de continue. */
            $numeros = [];
            for ($i=0; $i < 10; $i++) { 
                $tmp = mt_rand(1,100);
                /* echo "$tmp <br>"; */
                if($tmp%7==0){
                    continue;
                }
                array_push($numeros,$tmp);
            }

            echo "-------------------------------------<br>";
            for ($i=0; $i < count($numeros); $i++) { 
                echo $numeros[$i] . "<br>";
            }
            
        }
        // continuee(); primo(45);
    
    ?>  
</body>
</html>