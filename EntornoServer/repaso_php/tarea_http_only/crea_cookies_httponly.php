<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="cookies httponly">
	<meta name="author" content="Sergio">
    <title>Crear cookie</title>
</head>
<body>

    <?php 
    //Si el último parametro es true significa que la cookie solo se verá en php y no en js o otro lenguaje.
    //si es false se podrá ver en todos los lenguajes.
    setcookie("nombre","sergio",null,null,null,null,true);
        echo "<h1>Cookie creada!!</h1>";
        header("Refresh:1;url=/mostrar.php");
    ?>
</body>
</html>
<?php ob_flush(); ?>
