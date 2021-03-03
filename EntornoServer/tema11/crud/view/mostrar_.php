<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <title>Modifica</title>
</head>
<body>
<table>
<tbody>
<?php
/* if (isset($consulta_ver_brawl)) {
        for ($i = 0; $i < count($consulta_ver_brawl); $i++) {
                foreach ($consulta_ver_brawl[$i] as $nam => $value) {
                        echo "<h1>" . $nam . " - " . $value . "</h1>";
                }
                echo "<br>";
        }
}*/
?>
        <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>Numero de start power</th>
                <th>Numero de skins</th>
        </tr>

<?php if (isset($consulta_ver_brawl)): ?>
        <?php foreach ($consulta_ver_brawl as $datos): ?>
                <?php foreach ($datos as $valor): ?>
                <tr>
                <td><?php echo $valor; ?></td>
                <td><?php echo $valor; ?></td>
                <td><?php echo $valor; ?></td>
                <td><?php echo $valor; ?></td>
                </tr>
                <?php endforeach; ?>
        <?php endforeach; ?>
<?php endif; ?>
</tbody>
</table>

<?php if (isset($mensaje)) {
        if (isset($mensaje["mensaje"])) {
                echo "<h1>{$mensaje["mensaje"]}</h1>";
        } else {
                echo "<h1>{$mensaje["error"]}</h1>";
        }
} ?>
