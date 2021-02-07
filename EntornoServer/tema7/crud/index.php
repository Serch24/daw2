<!DOCTYPE html>
<html lang="es">
<head>
        <meta charset="UTF-8">
        <title>brawl CRUD CRUD</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
       <?php
       include_once "conecta_db.php";
       $brawl = conectaBD::singleton("dwes");
       $brawl->ver_brawl();

       if (isset($_GET["borrar"])) {
               $brawl->borrar_brawl($_GET["id"], $_GET["nombre"]);
               header("Refresh:2;url=/");
       }
       if (isset($_GET["insertar"])) {
               $brawl->insertar_brawl(
                       $_GET["nombre"],
                       $_GET["start"],
                       $_GET["skins"]
               );
               header("Refresh:2;url=/");
       }
       if (isset($_GET["actualizar"])) {
               $brawl->actualizar_brawl(
                       $_GET["id"],
                       $_GET["nombre"],
                       $_GET["start"],
                       $_GET["skins"]
               );
               header("Refresh:2;url=/");
       }
       echo "<br>";
       ?>
                <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="GET">
                        <div class="campos">
                                <input type="number" name="id" placeholder="id">
                                <input type="text" name="nombre" placeholder="nombre">
                                <input type="number" name="start" placeholder="numero start powers"> 
                                <input type="number" name="skins" placeholder="numero skins">
                        </div>
                  <br>
                  <br>
                        <div class="bts">
                                <input type="submit" class="sub" name="actualizar" value="actualizar">
                                <input type="submit" class="sub" name="borrar" value="borrar">
                                <input type="submit" class="sub" name="insertar" value="insertar">
                        </div>
                </form>
         <ul>
                 <li>
                         <p>Para actualizar un brawler se necesita el Id respectivo y los datos a cambiar</p>
                 </li>
                 <li>
                         <p>Para eliminar un brawler se necesita el Id y el nombre, los otros parametros son opcionales</p>
                 </li>
                 <li>
                         <p>Para insertar un brawler se necesitan todos los parametros , el Id es opcional</p>
                 </li>
         </ul>
</body>
</html>
