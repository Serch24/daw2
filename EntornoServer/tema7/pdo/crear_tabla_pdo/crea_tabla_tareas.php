<?php
// ----------- Proceso principal
include_once "conectaBD.php";
$obj = new conectaBD("dwes"); // crea conexión para usar bd empresa
/*if ($obj->creaTablaTask()) {
        // invoca método de objeto para crear tabla
        echo "tabla Tasks table creada";
} else {
        echo "Error al crear table Task";
}*/
$obj->consultaTareas(3, 1);
?>
