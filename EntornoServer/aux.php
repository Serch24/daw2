<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $num = 45;
    $num2 = 43;
    $aux;

    $aux = $num;
    $num = $num2;
    $num2 = $aux;

    echo 'num1= ' . $num . '<br>';
    echo 'num2= ' . $num2;

?>
</body>
</html>