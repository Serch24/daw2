<?php
require_once "../model/conecta_db.php";
$brawl = conectaBD::singleton("dwes");
$consulta_ver_brawl = $brawl->ver_brawl();
require_once "../view/mostrar_.php";
require_once "../view/index.php";
?>
