<?php ob_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body{
        width:500px;
        margin:auto;
    }
    label{
        display:block;
        margin: 10px 10px auto;
    }
    </style>
</head>
<body>
    <?php
        error_reporting(E_ALL);
    if($_SERVER['REQUEST_METHOD']=='POST'){
        session_start();
        $_SESSION['nombre']= $_POST['usuario'];
        $_SESSION['passwd']= $_POST['passwd'];
        echo "<h1>Bienvenido ". $_SESSION['nombre']."</h1>";
        header("location:crear_sesion.php");
    }else{
        ?>
            <form action=<?php echo $_SERVER['PHP_SELF'] ?> method="post">
                <label for="usuario">User: 
                <input type="text" name="usuario" id="usuario" required></label>
                <label for="passwd">Password:
                <input type="password" name="passwd" id="passwd" required></label>
                <input type="submit" value="enviar">
            </form>
        <?php
    }
    ?>
</body>
</html>
<?php ob_flush();?>