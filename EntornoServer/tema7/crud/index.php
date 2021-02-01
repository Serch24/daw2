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
               /*echo "<h1>Se ha borrado correctamente el brawler</h1>";*/
               header("Location:/");
       }
       if (isset($_GET["insertar"])) {
               $brawl->insertar_brawl(
                       $_GET["nombre"],
                       $_GET["start"],
                       $_GET["skins"]
               );
               /*echo "<h1>Se ha insertado correctamente el brawler</h1>";*/
               header("Location:/");
       }
       if (isset($_GET["actualizar"])) {
               $brawl->actualizar_brawl(
                       $_GET["id"],
                       $_GET["nombre"],
                       $_GET["start"],
                       $_GET["skins"]
               );
               /*echo "<h1>Se ha borrado correctamente el brawler</h1>";*/
               header("Location:/");
       }
       echo "<br>";
       ?>
                <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="GET">
                        <input type="number" name="id" placeholder="id">
                        <input type="text" name="nombre" placeholder="nombre">
                        <input type="number" name="start" placeholder="numero start powers"> 
                        <input type="nombre" name="skins" placeholder="numero skins">
                  <br>
                  <br>
                        <input type="submit" name="actualizar" value="actualizar">
                        <input type="submit" name="borrar" value="borrar">
                        <input type="submit" name="insertar" value="insertar">
                </form>
</body>
</html>
