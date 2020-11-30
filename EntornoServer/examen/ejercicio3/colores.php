<?php  ob_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Sergio Andrés Yaccelga Castillo">
    <meta name="description" content="Ejercicio de colores">
    <link rel="stylesheet" href="css.css">
    <title>colores</title>
</head>
<body>
   <?php
    if(isset($_GET['enviar'])){
        setcookie("color",$_GET['color'],time()+60*5,"/ejercicio3");
        setcookie("texto".$_GET['texto'],time()+60*5,"/ejercicio3");
        echo "Cookies creadas!!!";
    }else{
        ?>
         <form action="mostrar_colores.php" method="get">
            <label for="color">Color: </label>
            <input type="color" name="color" id="color" required>
            <label for="texto">texto:</label>
            <textarea name="texto" id="texto" cols="30" rows="10" required></textarea>
            <button id="enviar">Enviar</button>
        </form>
        <?php
    }


   ?>
</body>
</html>
<?php  ob_flush();?>
