<?php include "conecta.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <title>hash</title>
</head>
<body>
<?php if (isset($_POST["login"], $_POST["pass"])) {
        $tmp_hash = password_hash($_POST["pass"], PASSWORD_BCRYPT, [
                "cost" => 11,
        ]);
        echo password_verify($_POST["pass"], $tmp_hash)
                ? "Contraseña válida"
                : "NO";
} ?>
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
<input type="text" name="login" placeholder="login">
<input type="password" name="pass" placeholder="password">
<button>enviar</button>
</form>
</body>
</html>
</html>
