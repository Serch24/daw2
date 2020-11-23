<?php ob_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    $_SESSION['nombre']=$_POST['usuario'];
    $_SESSION['passwd']=$_POST['passwd'];
    echo"<pre>";
    echo "Sesion";
    print_r($_SESSION);
    echo "coockie";
    print_r($_COOKIE);
    echo "request";
    print_r($_REQUEST);
    echo"</pre>";
    
        if (!empty($_SESSION['nombre'])) {
            echo "<h1>Hola " . $_SESSION['nombre']."</h1>";
        }else{
            echo "algo pasó";
        }
    ?>
</body>
</html>
<?php ob_flush();?>