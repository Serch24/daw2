<?php ob_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    error_reporting(E_ALL);
    phpinfo();
    echo "<pre>";
        print_r($_COOKIE);
        print_r($_SESSION);
    echo "</pre>";
    ?>
</body>
</html>
<?php ob_flush();?>