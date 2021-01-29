<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <title></title>
</head>
<body>
       <?php
       include_once "conecta_db.php";
       $brawl = conectaBD::singleton("dwes");
       $tmp_pdo = $brawl->ver_brawl();

       // ya funciona esa kk de singleton :, falta implementar el CRUD);
       if ($tmp_pdo === null) {
               echo "<h1>Hubo un error con la consulta!!!</h1>";
               exit();
       } else {
               $arr = $tmp_pdo->fetchAll(PDO::FETCH_ASSOC);
               foreach ($arr as $v) {
                       echo "<p><strong>Id: </strong>" . $v["id"] . "</p>";
                       echo "<p><strong>Nombre: </strong>" .
                               $v["nombre"] .
                               "</p>";
                       echo "<p><strong>Numero de start power: </strong>" .
                               $v["num_start_power"] .
                               "</p>";
                       echo "<p><strong> numero de skins: </strong>" .
                               $v["num_skins"] .
                               "</p>";

                       echo "<hr>";
               }
       }

/*switch ($opcion) {
               case 1:
                       $tmp_pdo = $brawl->ver_brawl();

                       if ($tmp_pdo === null) {
                               echo "<h1>Hubo un error con la consulta!!!</h1>";
                               exit();
                       } else {
                               $arr = $tmp_pdo->fetchAll(PDO::FETCH_ASSOC);
                               foreach ($arr as $v) {
                                       echo "<p></strong>Id: </strong>" .
                                               $v["id"] .
                                               "</p>";
                                       echo "<p><strong>Nombre: </strong>" .
                                               $v["nombre"] .
                                               "</p>";
                                       echo "<p><strong>Numero de start power: </strong>" .
                                               $v["num_start_power"] .
                                               "</p>";
                                       echo "<p><strong> numero de skins: </strong>" .
                                               $v["num_skins"] .
                                               "</p>";

                                       echo "<hr>";
                               }
                       }
                       break;
               case 2:
                       break;
               case 3:
                       break;
               case 4:
                       break;
       }*/
?> 
</body>
</html>
