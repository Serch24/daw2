<!DOCTYPE html>
<html lang="es">
<head>
        <meta charset="UTF-8">
        <title>Hola</title>
</head>
<body>
<h1>¿Que quieres hacer?</h1>
        <form action="./llamar.php" method="GET" >
               crear Base de datos
                <input type="checkbox" name="creardb" class="creardb" value="creardb">
               insertar dato
                <input type="checkbox" name="tabla" class="tabla" value="tabla">
               Actualizar dato
                <input type="checkbox" name="actualizar" class="actualizar" value="actualizar">
               Eliminar dato
                <input type="checkbox" name="eliminar" class="eliminar" value="eliminar">
              query de consulta
                <input type="checkbox" name="ver" class="ver" value="ver">

                <textarea id="query" name="query" cols="30" rows="10" placeholder="query..." ></textarea>
                <input type="text" name="nombre_db" class="nombre_db" placeholder="Nombre bbdd" required>
                <input type="text" name="dbname" class="dbname" placeholder="dbname" required>
                <button name="enviar" class="bt" >Enviar</button>
        </form>
        <h1 class="ok"></h1>
        <p class="mos_tabla" ></p>
        <script src="./app.js" ></script>
</body>
</html>
