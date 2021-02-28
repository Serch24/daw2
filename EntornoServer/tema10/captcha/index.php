<!DOCTYPE html>
<html lang="es">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>captcha</title>
</head>
<body>
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="get">
                <p>Introduzca código de seguridad</p>
                <input type="text" name="texto" placeholder="escribelo">
                <img src="captcha.php" alt="captcha" width="400" height="300"><br><br>
                <button name="enviar">Enviar</button>
                <button name="otro">Cargar otro captcha</button>
        </form>
</body>
</html>
