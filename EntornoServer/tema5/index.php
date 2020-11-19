<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Sergio Andŕes Yaccelga Castillo">
    <meta name="description" content="Prueba">

    <style>
    body{
        width: 600px;
        margin: 20px auto;
        font-size: 2em;
    }
    p{
        background-color: #000;
        width:300;

    }
    </style>
    <title>Document</title>
</head>
<body>
    <?php
    $flag = false;
        if ($_SERVER['REQUEST_METHOD'] != 'GET') {
            $valido = strlen($_POST['nombre'])>=5;
            $errores = [];
            if(!$valido){
                $errores[] = $_POST['nombre'];
                echo "error de longitud\n";
                echo "bobo";

            }
        }
        
        if($_SERVER['REQUEST_METHOD'] != 'GET' && $valido){
            echo "Todo correcto buddy ;-)\n";
            foreach ($errores as $key => $value) {
                echo "$key.) $value\n";
            }
        }else{
        ?>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        nombre:<input type="text" name="nombre" id="nombre" value=<?php echo $_POST['nombre']?>>
        <input type="submit" value="enviar">
        </form>
        <?php
        }

    ?>
</body>
</html>
