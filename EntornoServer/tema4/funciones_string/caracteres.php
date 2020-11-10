<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Caracteres</title>
</head>
<body>
<?php
    $tmp = [];
    $tmp_caracteres = [];
    $asunto = $_GET['tema'];
    $comentario = $_GET['comentario'];
    $arr = count_chars($comentario,0);
    $palabras = explode(" ",$comentario);
    $cant_palabras = 0;
    //Cantidad de caracteres.
    echo "<p>Hay " . strlen($comentario). " caracteres</p>\n";
    /* guarda en un array las palabras repetidas como clave y las veces en las que se repite
    como valor. */
    foreach ($palabras as $v) {
        if (!array_key_exists($v,$tmp)) {
            $tmp[$v]=substr_count($comentario,$v);
        }
    }
    echo chr(240) . chr(159) . chr(144) . chr(152);
    echo chr(240) . chr(159) . chr(144) . chr(153);
    echo "&#x1F418";
    foreach (count_chars($comentario,1) as $k => $v) {
        echo "<p> La letra '". chr($k) . "' se repite $v veces </p>\n";
    }


    foreach ($tmp as $key => $value) {
        echo "<p>La palabra '$key' se repite $value veces<p>\n";
    }

    foreach ($tmp as $value) {
        $cant_palabras+=$value;
    }
    echo "<p>Hay en total $cant_palabras palabras</p>\n";

    foreach ($tmp as $key => $value) {
        if (max($tmp)==$value) {
            echo "<p>La palabra más repetida es '$key'</p>\n";
        }
    }

?>
</body>
</html>