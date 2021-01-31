<!DOCTYPE html>
<html lang="es">
<head>
        <meta charset="UTF-8">
        <title>brawl CRUD CRUD</title>
</head>
<body>
       <?php
       include_once "conecta_db.php";
       $brawl = conectaBD::singleton("dwes");
       $brawl->ver_brawl();
       if (isset($_GET["borrar"])) {
               $brawl->borrar_brawl($_GET["id"], $_GET["nombre"]);
       }
       echo "<br>";
       ?>
                <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="GET">
                        <input type="text" name="id" placeholder="id">
                        <input type="text" name="nombre" placeholder="nombre">
                        <input type="text" name="start" placeholder="numero start powers"> 
                        <input type="nombre" name="skins" placeholder="numero skins">
                  <br>
                  <br>
                        <input type="submit" name="actualizar" value="actualizar">
                        <input type="submit" name="borrar" value="borrar">
                        <input type="submit" name="insertar" value="insertar">
                </form>
</body>
</html>
