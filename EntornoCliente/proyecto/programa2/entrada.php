<?php
include "./conecta_db.php";
$t = conectaBD::singleton("Banco");
if (isset($_GET["num_cuenta"])) {
        echo $t->comprobarCuenta($_GET["num_cuenta"]);
} else {
        echo "quien eres";
}
?>
