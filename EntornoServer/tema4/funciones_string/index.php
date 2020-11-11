<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Sergio Andrés Yaccelga Castillo">
    <meta name="description" content="Tarea de formularios en php">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
<!-- Crea un archivo HTML que contenga un formulario con campos para introducir el usuario y la pasword, y un
botón de envio. Establece el action del formulario al archivo MENSAJES . PHP y configura el método de envio como
GET . -->
    <h1>Identificación de usuario</h1>
    <form action="MENSAJES.php" method="get">
    
        <div class="main">
            <label for="user" class="lab">User: </label>
            <input type="text" name="user" id="user" class="user">
            <label for="pass" class="lab">password: </label>
            <input type="password" name="pass" id="pass" class="pass">
            <input type="submit" value="Entrar" class="sub">
        </div>    
    </form>
</body>
</html>