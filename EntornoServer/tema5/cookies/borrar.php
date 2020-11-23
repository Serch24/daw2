<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        setcookie("nombre","sergio", time()-1,"/","localhost",true,FALSE);
    ?>
</body>
</html> 
<?php ob_end_flush() ?> 
