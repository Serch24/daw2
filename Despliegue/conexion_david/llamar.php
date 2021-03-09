<?php
require "./conectaDB.php";
if (isset($_GET["datos"])) {
        $resp = json_decode($_GET["datos"]);
        $nuevo = conectaBD::singleton();
        echo $nuevo->crear($resp);
} else {
        echo "<h1>Quien eres? y que haces aquí</h1>";
}

?>
