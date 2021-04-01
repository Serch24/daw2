<?php
require "./conectaDB.php";
if (isset($_GET["enviar"])) {
        $nuevo = conectaBD::singleton();
        if (isset($_GET["x"])) {
                $tmp = json_decode($_GET["x"]);
                /*print_r($tmp);*/
                /*echo $tmp->info->query;
                 echo $tmp->info->nombredb;*/
                echo $nuevo->insertar($tmp);
        }

        if (isset($_GET["creardb"])) {
                echo $nuevo->creardb($_GET["creardb"]);
        }

        if (isset($_GET["actualizar"])) {
                $tmp = json_decode($_GET["actualizar"]);
                echo $nuevo->actualizar($tmp);
        }

        if (isset($_GET["eliminar"])) {
                $tmp = json_decode($_GET["eliminar"]);
                echo $nuevo->eliminar($tmp);
        }

        if (isset($_GET["ver"])) {
                $tmp = json_decode($_GET["ver"]);
                echo $nuevo->ver($tmp);
        }
} else {
        echo "<h1>Quien eres? y que haces aquí</h1>";
}

?>
