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
    $asunto = $_GET['tema'];
    $comentario = $_GET['comentario'];
    $arr = count_chars($comentario,0);
    $palabras = explode(" ",$comentario);
    $cant_palabras = 0;
    //Cantidad de caracteres.
    echo trim($comentario);
    echo "<p>Hay " . strlen($comentario). " caracteres</p>";
    
    // echo "<h1>Hay " . $arr[ord('o')];
    
    /* guarda en un array las palabras repetidas como clave y las veces en las que se repite
    como valor. */
    foreach ($palabras as $v) {
        if (!array_key_exists($v,$tmp)) {
            $tmp[$v]=substr_count($comentario,$v);
        }
    }
    foreach ($tmp as $key => $value) {
        echo "<p>La palabra '$key' se repite $value veces<p>";
    }

    foreach ($tmp as $value) {
        $cant_palabras+=$value;
    }
    echo "<p>Hay en total $cant_palabras palabras</p>";

    foreach ($tmp as $key => $value) {
        if (max($tmp)==$value) {
            echo "<p>La palabra más repetida es '$key'</p>";
        }
    }

?>
</body>
</html>