<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function concatenarValor($cadena){
            $cadena = $cadena . "concatena un texto por un valor";        
        
        }

        function concatenaxReferencia(&$cadena){
            $cadena = $cadena . "Concatena un texto por referencia";

        }

        $texto = "hola :D "; 
        
        concatenarValor($texto);
        echo $texto . "<br>";
        concatenaxReferencia($texto);
	echo $texto;
    ?>
</body>
</html>
