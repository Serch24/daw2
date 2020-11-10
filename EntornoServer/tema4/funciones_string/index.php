<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Sergio Andrés Yaccelga Castillo">
    <meta name="description" content="Tarea de formularios en php">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <h1>Identificación de usuario</h1>
    <form action="MENSAJES.php" method="get">
    
        <label for="user">User</label>
        <input type="text" name="user" id="user" class="user">
        <label for="pass">password</label>
        <input type="password" name="pass" id="pass" class="pass">
        <input type="submit" value="Entrar">
    
    </form>
</body>
</html>