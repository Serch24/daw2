<?php ob_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transferencia</title>
</head>
<body>
    <?php
        session_start();
        if(!isset($_SESSION['token'])){
            echo "a";
        }else{
            echo "b";
        }
        /* if (!empty($_SESSION['permiso'])) {
            die();
        } 
        if (!isset($_SESSION['token']) || !isset($_POST['token'])) {
            die();
        }
        if ($_SESSION['token'] != $_POST['token']) {
            die();
        }
        echo "<pre>";
        var_dump($_SESSION['token']);
        echo "</pre>";

        unset($_SESSION['token']);
        //do something...a7f568c3bfdec5c508b93cbec004bd48
        5fc41401e6be9
     */

    ?>    
</body>
</html>
<?php ob_flush();?>