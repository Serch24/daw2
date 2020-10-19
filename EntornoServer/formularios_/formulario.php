<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Curriculum</h1>
    <form action="salida.php" method="get">
    <label for="nombre"></label>
    name: <input type="text" name="nombre" id="nombre">
    password: <input type="password" name="passwd" id="passwd"><br><br>
    <label for="idiomas"></label>
    lenguajes: <select name="idioma" id="idiomas">
        <option value="spanish">Spanish</option>
        <option value="french">french</option>
    </select><br><br>

    <label for="fecha">
    BirthDay: <input type="date" name="fecha" id="fecha">
    </label>
    <br><br>
    Genero: 
        <br>Men: <input type="radio" name="gen" id="men" value="men">
        <br>Women: <input type="radio" name="gen" id="women" value="woman">
        <br>Undefined: <input type="radio" name="gen" id="gen" value="undefined">
        <input type="submit" value="send">
    </form>
</body>
</html>