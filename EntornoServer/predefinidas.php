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
    }
    table,th,td{
        border: 0.5px solid black;

    }
    tr,td{
        height: 35px;
        width: 20px;
    }
    h1{
        text-align: center;
    }
    </style>
</head>
<body>
    
    <?php
    $predefi = ["PHP_VERSION" => PHP_VERSION,"PHP_MAJOR_VERSION" => PHP_MAJOR_VERSION,"PHP_MINOR_VERSION" => PHP_MINOR_VERSION,"PHP_RELEASE_VERSION" => PHP_RELEASE_VERSION];

    echo "<table><tr>";
    foreach ($predefi as $key => $value) {
        echo "<th>$key</th>";
    }
    echo "</tr><tr>";
    foreach ($predefi as $key => $value) {
        echo "<td>$key</td>";
    }
    echo "</tr></table>";

    ?>
</body>
</html>