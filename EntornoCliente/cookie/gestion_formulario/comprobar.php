<?php
function ini()
{
        if (isset($_GET["nombre"], $_GET["edad"])) {
                setcookie("nombre", $_GET["nombre"]);
                setcookie("edad", $_GET["edad"]);
        }
}
ini();
?>
