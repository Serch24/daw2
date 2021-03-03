<!DOCTYPE html>
<html lang="es">
<head>
        <meta charset="UTF-8">
        <meta name="author" content="Sergio Andŕes Yaccelga Castillo">
        <meta name="description" content="Ejercicio de CRUD con MVC">
        <link rel="stylesheet" href="../assets/style.css">
        <title>CRUD</title>
</head>
<body>
<div class="conta">
<table>
<tbody>
        <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>Numero de start power</th>
                <th>Numero de skins</th>
        </tr>

<?php if (isset($consulta_ver_brawl)): ?>
        <?php foreach ($consulta_ver_brawl as $datos): ?>
                <tr>
                  <td><?php echo $datos->id; ?></td>
                  <td><?php echo $datos->nombre; ?></td>
                  <td><?php echo $datos->num_start_power; ?></td>
                  <td><?php echo $datos->num_skins; ?></td>
                </tr>
        <?php endforeach; ?>
<?php endif; ?>

</tbody>
</table>
</div>

<?php if (isset($mensaje)) {
        if (isset($mensaje["mensaje"])) {
                echo "<h1>{$mensaje["mensaje"]}</h1>";
        } else {
                echo "<h1>{$mensaje["error"]}</h1>";
        }
} ?>
