<!DOCTYPE html>
<html lang="es">
<head>
        <meta charset="UTF-8">
        <title>fetch</title>
</head>
<body>
<?php
function consultar()
{
        if (isset($_POST["nombre"], $_POST["apellido"])) {
                $tmp = json_encode($_POST);
                echo "<script>const data = $tmp</script>";
        } else {
                 ?>
<form action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST">
nombre: <input type="text" name="nombre"> <br>
apellido: <input type="text" name="apellido"><br>
<button>enviar</button>

<?php
        }
}
consultar();
?>
<script src="app.js"></script>
</form>
</body>
</html>
