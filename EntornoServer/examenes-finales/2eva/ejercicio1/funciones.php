<?php
function filtrado($parametro)
{
        if (is_string($parametro)) {
                $parametro = trim($parametro); // Elimina espacios antes y después de los datos
                $parametro = stripslashes($parametro); // Elimina backslashes \
                $parametro = htmlspecialchars($parametro); // Traduce caracteres especiales en entidades HTML
                return $parametro;
        }
        /*
        if (is_array($parametro)) {
                $tmp = $parametro;
                foreach ($parametro as $nombre => $va) {
                        $tmp[$nombre] = trim($va);
                        $tmp[$nombre] = stripslashes($va);
                        $tmp[$nombre] = htmlspecialchars($va);
                }
                return $tmp;
        }*/
        return null;
}

function esta_vacio($recibido)
{
        if (is_string($recibido)) {
                return empty($recibido);
        }
        return null;
}
?>
