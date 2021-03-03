<?php
require_once "../model/conecta_db.php";
$brawl = conectaBD::singleton("dwes");
$mensaje = null;

if (isset($_GET["borrar"])) {
        $mensaje = $brawl->borrar_brawl($_GET["id"], $_GET["nombre"]);
}

if (isset($_GET["insertar"])) {
        $mensaje = $brawl->insertar_brawl(
                $_GET["nombre"],
                $_GET["start"],
                $_GET["skins"]
        );
}

if (isset($_GET["actualizar"])) {
        $mensaje = $brawl->actualizar_brawl(
                $_GET["id"],
                $_GET["nombre"],
                $_GET["start"],
                $_GET["skins"]
        );
}
require_once "./index.php";
/*header("Location:/");*/
?>
