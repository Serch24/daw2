<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="cookies httponly">
	<meta name="author" content="Sergio">
    <title>Borrar cookie</title>
</head>
<body>
    <?php
        setcookie('nombre',"sergio",(time()-1),null,null,null,false);
        echo "<h1>Cookie Borrada!!!</h1>";
    
        header("Refresh:1;url=/mostrar.php");
    ?>
</body>
</html>
<?php ob_flush(); ?>
