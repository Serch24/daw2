<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="Sergio Andres" content="Yaccelga Castillo">
    <title>bucles</title>
</head>
<body>
    <?php
    echo "<h1>potencia de 2 </h1>";
    /* EJ1. Mostrar 10 primeras las potencias de 2
     usando un bucle while. */
    $flag = 1;
    while($flag != 11){
        $dos = pow(2,$flag);
        echo "<h1>$dos</h1>";
        $flag++;
    }
    echo "<br>";
    ?>

    <?php
    /* EJ2. Mostrar números aleatorios del 1 al 100 hasta que encuentres el número 20
     Usando un do-while. */
        echo "<h1>Numero aleatorio </h1>";
        do {
        $a = rand(1,30);
            echo "$a ";
            if ($a == 20) {
                echo "<p>Lo has encontrado :D</p>";
            }
        } while ($a != 20);
        echo "<br>";
    ?>

    
    <?php
    /* EJ3. Muestra las notas de un alumno y su media. 
    Usando un bucle for. Tener en cuenta que las notas están en un array numérico. */
        echo "<h1>Notas</h1>";
        $notas = [5,2,5,6,1,3,5];
        for ($i=0; $i < count($notas); $i++) { 
            echo "<p>". $notas[$i]. "</p>";
        }
        $pro = array_sum($notas)/count($notas);
        echo "<h1>Su promedio es: $pro</h1>";
    ?>

</body>
</html>