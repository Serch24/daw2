<!DOCTYPE html>
<html lang="es">
<head>
        <meta charset="UTF-8">
        <title>Hola</title>
</head>
<body>
<h1>¿Que quieres hacer?</h1>
        <form action="./llamar.php" method="GET" >

           <label for="dbname" >
                Crear database:
                <input type="text" name="dbname" class="dbname" placeholder="dbname" required>
           </label>

           <button name="enviar" class="bt" >Enviar</button>
            <h3 class="crear_tabla" >Crear tabla</h3>
        </form>
        <h1 class="ok"></h1>
        <script src="./app.js" ></script>
</body>
</html>
