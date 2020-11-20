<?php ob_start(); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mi documento</title>
</head>
<body>
    <?php
        setcookie("nombre","sergio", time()+50);
        if (!empty($_COOKIE['nombre'])) {
            echo "<br>la cookie es : ". $_COOKIE['nombre'];
        }else{
            echo "<br>no existe";
        }
    ?>
</body>
</html>
<?php ob_flush(); ?> 
