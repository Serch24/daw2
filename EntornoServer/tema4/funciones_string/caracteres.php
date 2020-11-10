<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Caracteres</title>
</head>
<body>
<h1>Informe sobre el comentario</h1>
<?php
    $usu = $_GET['usu'];
    $pass = $_GET['pass'];
    $tmp = [];
    $caracteres = [];
    $asunto = $_GET['tema'];
    $comentario = $_GET['comentario'];
    $arr = count_chars($comentario,0);
    $palabras = explode(" ",$comentario);
    $cant_palabras = 0;
    $tmp_caracteres[]= str_split($comentario);
    //Cantidad de caracteres.
    echo "<p>Hay " . strlen($comentario). " caracteres</p>\n";
    //Palabras
    for ($i=0; $i < count($palabras); $i++) { 
        if (!isset($tmp[$palabras[$i]])) {
            $tmp[$palabras[$i]]= 0;
        }
        $tmp[$palabras[$i]]+= 1; 
    }    
    //caracteres
    for ($i=0; $i < count($tmp_caracteres[0]); $i++) { 
        if (!isset($caracteres[$tmp_caracteres[0][$i]])) {
            $caracteres[$tmp_caracteres[0][$i]]= 0;
        }
        $caracteres[$tmp_caracteres[0][$i]]+= 1; 
    }

    foreach ($caracteres as $key => $value) {
        if (max($caracteres)==$value) {
            echo "<p>El caracter/(s) que más se repiten son '$key', y se repiten $value veces</p>";
        }
    }
    echo chr(240) . chr(159) . chr(144) . chr(152);
    echo chr(240) . chr(159) . chr(144) . chr(153);
    echo "&#x1F418";
    
    foreach ($tmp as $key => $value) {
        echo "<p>La palabra '$key' se repite $value veces<p>\n";
    }

    foreach ($tmp as $value) {
        $cant_palabras+=$value;
    }
    echo "<p>Hay en total $cant_palabras palabras</p>\n";

     foreach ($tmp as $key => $value) {
        if (max($tmp)==$value) {
            echo "<p>La palabra más repetida es '$key' y se repite $value veces</p>\n";
        }
    } 

    echo "<a href='MENSAJES.php?user=$usu&pass=$pass'>Volver</a>";
?>
</body>
</html>