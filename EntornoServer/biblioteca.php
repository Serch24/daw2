<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
</head>
<body>
 <?php
    
 $biblioteca = array("titulo" => array("amor","pereza","tristeza"), "autor" => "sergio", "editorial" => "editorial1","año" => array(1999,2002,2004), "en_prestamo" => 22);
// foreach ($biblioteca as $key => $value) {
//     if(is_array($value)){
//         echo "$key : $value <br>";
//     }
// }

foreach($biblioteca as $key => $v){
    if(is_array($v)){
        foreach ($v as $va) {
            echo "<br> $va";
        }
    }else{
        echo "$v";
    }
    echo "<br>";
}

 ?>
</body>
</html>