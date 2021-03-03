<?php
function filtrado($parametro)
{
        $parametro = trim($parametro); // Elimina espacios antes y después de los datos
        $parametro = stripslashes($parametro); // Elimina backslashes \
        $parametro = htmlspecialchars($parametro); // Traduce caracteres especiales en entidades HTML
        return $parametro;
}

function esta_vacio($arra)
{
        foreach ($arra as $v) {
                if (empty($v) && $v !== 0) {
                        return true;
                }
        }
        return false;
}

/*echo esta_vacio([2, 0]) ? "esta vacio" : "No";*/

?>
