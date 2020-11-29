<?php ob_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>datos de cuenta</title>
</head>
<body>
    <?php 
    session_start();
    if(!empty($_SESSION['permiso'])){
        echo "a";
        die();
    }else{
        ?>
            <form action="transferencia.php" method="post">
                <!-- Debo crear un id unico y asignarselo a la sesión, y creo un input hidden con el value del id para
                que verificar en la otra pagina si se ha adcedido por este formulario, si es asi hará la transferencia,
                si no, el programa morirá por el die()-->
              <?php $token = uniqid(); $_SESSION['token']=$token; ?>
                <label for="dni">DNI:</label>
                <input type="text" name="dni" id="dni">
                <input type="hidden" name="token" value=<?php echo $token?>>
                <label for="passwd">CONTRASEÑA</label>
                <input type="password" name="passwd" id="passwd">
                <button id="id">Enviar</button>
            </form>
        
        <?php
    }
    
    
    
    
    ?>
</body>
</html>
<?php ob_flush();?>