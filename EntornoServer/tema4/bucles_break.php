<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Sergio Andrés Yaccelga Castillo">
    <meta name="descriptions" content="bucle de contraseñas">
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
                    echo "<h1>Es prim0</h1>";
                break;
                }
                    
            } while (!$flag);
        }
    
        function continuee()
        {
            /* EJ2. Obtener 10 números aleatorios del 1 al 100, 
            pero ignorar los números múltiplos de 7. Uso de continue. */
            for ($i=0; $i < 10; $i++) { 
                $tmp = mt_rand(1,100);
                /* echo "$tmp <br>"; */
                if($tmp%7==0){
                    continue;
                }
                echo "<h1>$tmp</h1>";
            }
            
        }
        //continuee(); 
        //primo(56);
    
    ?>  
</body>
</html>