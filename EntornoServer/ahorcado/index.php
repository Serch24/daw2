<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Sergio Andrés Yaccelga Castillo">
    <meta name="description" content="Empieza el juego del ahorcado">
    <link rel="stylesheet" href="css.css">
    <title>Ahorcado by Sergio Yaccelga</title>
</head>
<body>
    <div class="main">
        <div class="deadmen"></div>

        <div class="words">
            <?php
            $guardar = $_GET['aux'];
            if (isset($tmp)) {
                echo $guardar;
            }else{
                $palabras = [];
                $file = fopen("./palabras.txt",'r') or die("error al leer el archivo");
                while ($a = fgets($file)) {
                    $palabras[]=$a;
                }
                
                shuffle($palabras);
                $tmp = $palabras[0];
                echo $tmp;
                echo $_SERVER['HTTP_USER_AGENT'];
            }
            ?>
        </div>

        <div class="form">
            <form action="index.php" method="get">
                <label for="letra">Letra:</label>
                <input type="text" name="letra" id="letra" required>
                <input type="hidden" name="aux" value=<?php echo $tmp?>>
                <button>Enviar</button>
            </form>
        </div>
    </div>
    <?php
        $letra = $_GET['letra'];
        const PATTERN = "/^[a-zA-Z]{1}$/i";
        const CARACTER_MINIMO = 1;
            if (!(empty($letra)) && strlen($letra)==CARACTER_MINIMO && (preg_match(PATTERN,$letra))==1) {
                echo substr($tmp,0,1);
                if(strcasecmp(substr($tmp,0,1),$letra)==0){
                    echo "You win!";
                }
            }else{
                echo "<h3>Escribe algo</h3>";
            }
    ?>
    
</body>
</html>