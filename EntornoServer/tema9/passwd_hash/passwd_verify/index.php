<!DOCTYPE html>
<html lang="es">
<head>
        <meta charset="UTF-8">
        <title>Password con Hash_verify</title>
</head>
<body>
<?php include "conectadb.php"; ?>
<?php if (
        isset($_POST["login"], $_POST["passwd"]) &&
        !empty($_POST["login"]) &&
        !empty($_POST["passwd"])
) {
        $start = conectaBD::singleton("dwes");
        $res = $start->comprobar($_POST["login"], $_POST["passwd"]);
        if (isset($res["error"])) {
                echo "<h1>{$res["error"]}</h1>";
        } else {
                echo "<h1>{$res["mensaje"]}</h1>";
        }
} else {
         ?>
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
                <input type="text" name="login" placeholder="login" >
                <input type="password" name="passwd" placeholder="password" >
                <button>Enviar</button>
</form>
<?php
} ?>

</body>
</html>
