<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function saludo(){
            switch (func_num_args()) {
                case 0:
                    $mensaje = "buenos dias";
                    $persona = "pepe";
                    break;
                
                case 1:
                    $mensaje = "buenos dias";
                    $persona = func_get_arg(0);
                    break;

                case 2:
                    $mensaje = func_get_arg(0);
                    $persona = func_get_arg(1);
                    break;
                default:
                
                    break;
            }
            echo "$mensaje $persona<br>";

        }

        saludo();
        saludo("sergio");
        saludo("andres","buenos dias");

    ?>
</body>
</html>