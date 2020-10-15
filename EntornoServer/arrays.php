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
        $arraisito[5] = "hola5";
        //print_r($arraisito);

        $arraisito3 = array("nombre" => "paco","edad" => "23","idiomas" => array("ingles","fances","español"));
        // for ($i=0; $i < count($arraisito); $i++) { 
        //     echo "<br> $i .) ". $arraisito[$i];
        // }
        // foreach ($arraisito as $key => $value) {
        //     echo "<br> $key .) $value";
        // }
        
        // foreach ($arraisito as $value) {
        //     echo "<br> $value";
        // }
        
        foreach($arraisito3 as $key => $v){
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