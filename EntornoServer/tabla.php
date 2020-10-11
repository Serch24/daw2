<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table{
        border-collapse: collapse;
        margin: 10% auto;
        width: 220px;
    }
    table,th{
        border: 0.5px solid black;
    }
    tr,th{
        height: 35px;
        text-align: center;

    }
    </style>
</head>
<body>
    <?php
        $numero = 10;
        echo '<table>';
        for ($i=1; $i < 11; $i++) { 
            echo '<tr>';
            echo '<th>' . $i . ' x ' . $numero . ' = ' . $i * $numero. '</th>';
            echo '</tr>';
        }
        echo '</table>';
    ?>
</body>
</html>