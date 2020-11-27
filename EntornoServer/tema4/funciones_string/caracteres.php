<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Sergio Andŕes Yaccelga Castillo">
    <meta name="content" content="mensajes sobre los caracteres">
    <link rel="stylesheet" href="style.css">
    <title>Caracteres</title>
</head>
<body>

<!-- Botón de envio con etiqueta Detalle que llame a un nuevo archivo PHP ( nombralo tú ) encargado de
presentar información sobre el texto contenido en la opinión (cuantos caracteres tiene, cuantas palabras,
carácter más repetido, palabra más repetida,... y otras más elegidas por vosotros . La primera se hace sobre el
texto original, el resto sobre los 140 primeros caracteres) y enlace para volver a registrar opiniones -->

<h1>Informe sobre el comentario</h1>
    <?php
    error_reporting(E_ALL);
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
        echo "<table><tr>\n";
        echo "<th>Tamaño de la cadena</th>\n";
        echo "<td>" . strlen($comentario). "</td>\n";
        
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
        
        echo "</tr><tr><th>Caracteres que mas se repiten</th>\n";
        foreach ($caracteres as $key => $value) {
            if (max($caracteres)==$value) {
                echo "<td> ' $key ', $value veces</td>\n";
            }
        }
        // echo chr(240) . chr(159) . chr(144) . chr(152);
        // echo chr(240) . chr(159) . chr(144) . chr(150);
        // echo "&#x1F418";
        foreach ($tmp as $value) {
            $cant_palabras+=$value;
        }
        
        echo "</tr><tr><th>Total palabras</th>\n";
        echo "<td>$cant_palabras </td>\n";
            
        
        echo "</tr><tr><th>Palabra mas repetida</th>";
        foreach ($tmp as $key => $value) {
            if (max($tmp)==$value) {
                echo "<td> ' $key ' , $value veces</td>\n";
            }
        } 
        echo "</tr></table>\n";
        
        echo "<a href='MENSAJES.php?user=$usu&pass=$pass'>Volver</a>";
        ?>
</body>
</html>