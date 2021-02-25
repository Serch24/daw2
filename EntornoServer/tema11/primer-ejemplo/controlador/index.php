<?php
require_once "../modelo/p_singleton.php";
require_once "./funciones.php";
$miconexion = conectaBD::singleton("dwes");
$tmp = $miconexion->consulta();
require_once "../vista/index.php";

?>
