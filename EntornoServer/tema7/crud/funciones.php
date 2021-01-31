<?php
function filtrado($parametro)
{
        $parametro = trim($parametro); // Elimina espacios antes y después de los datos
        $parametro = stripslashes($parametro); // Elimina backslashes \
        $parametro = htmlspecialchars($parametro); // Traduce caracteres especiales en entidades HTML
        return $parametro;
}
?>
