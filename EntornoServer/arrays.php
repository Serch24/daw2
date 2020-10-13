<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $arraisito = array();
        // $arraisito2 = ["d","s"];
        $arraisito[0] = "hola";
        $arraisito[1] = "hola2";
        $arraisito[2] = "hola3";
        $arraisito[3] = "hola4";
        print_r($arraisito);

        for ($i=0; $i < count($arraisito); $i++) { 
            echo "<br> $i .) ". $arraisito[$i];
        }
    
    ?>
</body>
</html>