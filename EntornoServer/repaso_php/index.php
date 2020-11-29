<?php ob_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>Document</title>
</head>
<body>
    <?php error_reporting(E_ALL);
    /* debe tener un minimo de 5 caracteres el usuario y la 
    contraseña debe contar con mayusculas  y un minimo de 9 caracteres*/
    $error_campo = false;
    $error_usuario = false;
    $error_pass = false;
    $error_pattern = false;
    $todo_ok = false;

        if($_SERVER['REQUEST_METHOD']=='POST'){
            if (empty($_POST['usuario'])|| empty($_POST['passwd'])) {
                echo "<h1>Hay un campo en blanco!!!!</h1>";
                $error_campo = true;
            }

            if(strlen($_POST['usuario'])<5 && ($error_campo == false)){
                echo "<h1>Debes escribir mas letras a tu usuario!!</h1>";
                $error_usuario=true;
                
            }
            if(strlen($_POST['passwd'])<9 && ($error_campo ==false) && ($error_usuario ==false)){
                echo "<h1>La contraseña debe tener como minimo 9 caracteres!!</h1>";
                $error_pass = true;
            }
            if(!preg_match('/^[a-zA-Z]{9,}$/',$_POST['passwd']) && $error_campo !=true 
            && $error_usuario !=true && $error_pass != true){
                echo "<h1>La contraseña debe tener varios caracteres</h1>";
                $error_pattern = true;
            }
            if($error_campo ==false 
            && $error_usuario ==false && $error_pass == false && $error_pattern == false){
                $usuario = $_POST['usuario'];
                $pass = $_POST['passwd'];
                $todo_ok = true;
            }
        }
        if (!empty($_POST['usuario'])&& !empty($_POST['passwd']) && $todo_ok) {
            echo "<h1>Bienvenido $usuario, tu contraseña es $pass</h1>";
            /* if(is_uploaded_file($_FILES['fichero']['tmp_name'])){
                $directorio = "/var/www/html/";
                $nombre_fichero = $_FILES['fichero']['name'];
                $fichero_subir = $directorio . $nombre_fichero;
                if(is_file($fichero_subir)){
                    $id_unico = time();
                    $nombre_fichero = $id_unico . "-". $nombre_fichero;
                }
                move_uploaded_file($_FILES['fichero']['tmp_name'],$directorio.$nombre_fichero);
                echo "<h1>Fichero subido :D</h1>";
                session_start();
                $_SESSION['nombre']=$usuario;
                header("Refresh:2;url={$_SERVER['PHP_SELF']}");
            }else{
                echo "ALGO PASÓ!!";
            } */
            // session_start();
            // $_SESSION['nombre']=$usuario;
            // header("Refresh:2;url={$_SERVER['PHP_SELF']}");
        }
        else{
            ?>
            <h1>Llena el formulario</h1>
            <?php echo "<pre>"; print_r($_SESSION['nombre']); echo "</pre>";?>
            <form action="<?php $_SERVER['PHP_SELF']?>" method="post" ENCTYPE="multipart/form-data">
                <label for="usuario">Usuario: </label>
                <input type="text" name="usuario" id="usuario">
                <label for="passwd">Contraseña </label>
                <input type="password" name="passwd" id="passwd">
                <label for="fichero">Fichero: </label>
                <input type="file" name="fichero" id="fchero">
                <button>Enviar</button>
            </form>

            <?php
        }
    ?>
</body>
</html>
<?php ob_flush();?>