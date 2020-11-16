<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Sergio Andrés Yaccelga Castillo">
    <meta name="content" content="Ejercicio sobre comparar fecha">
    <title>Fecha</title>
</head>
<body>
<!-- 

 -->
<h1>Fechas</h1>
    <?php
    error_reporting(E_ALL);
    if (!empty($_GET['fecha'])) {
        $fechaa = $_GET['fecha'];
        $hora_actu = getdate();
        $hoy = $hora_actu['year']."-". $hora_actu['mon'] ."-". $hora_actu['mday'];
        echo ($hoy >= $fechaa)? "<h2>Ya no tienes tiempo </h2>": "<h2>Aún tienes tiempo </h2>";
    }else{
           ?>
            <form action="/fecha.php" method="get">
                <label for="mifecha">Fecha :</label>
                <input type="date" name="fecha" id="mifecha">
                <input type="submit" value="Enviar">
            </form>
            <?php 
        }

    ?>
</body>
</html>