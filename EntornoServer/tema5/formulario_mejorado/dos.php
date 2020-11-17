<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>Document</title>
</head>
<body>
    <?php
        /* Debe procesar los datos recibidos del formulario y mostrarlos.
        (Para los arrays podéis usar implode) */
    
        if (!empty($_POST['texto'])&& !empty($_POST['passwd'])&&!empty($_POST['check'])&& !empty($_POST['radio'])) {
            foreach ($_POST as $key => $value) {
                echo "<p>$key es: $value</p>";
            }
            /* $texto = $_POST['texto'];
            $pass = $_POST['passwd'];
            $check = $_POST['check'];
            $radio = $_POST['radio'];
            echo "<h1>el texto: $texto</h1>\n";
            echo "<h1>La contraseña: $pass</h1>\n";
            echo "<h1>chekbox: $check</h1>\n";
            echo "<h1>radio: $radio</h1>\n"; */
        }else{
            echo "<h1>No has escrito algún campo del formulario</h1>";
        }
    
    ?>
</body>
</html>