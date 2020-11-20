<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href='leer_cookie.php'>Presiona</a>
    <?php
        error_reporting(E_ALL);
        if (!empty($_COOKIE['nombre'])) {
            echo "<h1>La cookie es: ". $_COOKIE['nombre']."</h1>";
        }else{
            echo "<h1>No existe la cookie</h1>";
        }
        
    ?>
</body>
</html>