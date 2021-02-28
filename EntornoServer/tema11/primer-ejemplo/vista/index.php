<!DOCTYPE html>
<html lang="es">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Sergio Andrés Yaccelga Castillo"></meta>
        <meta name="description" content="Modelo vista controlador"></meta>
        <link rel="stylesheet" href="./assets/style.css">
        <title>MVC</title>
</head>
<body>
<?php if (!$tmp) {
        echo "<h1>Ha ocurrido un error en la consulta</h1>";
} else {
        echo "<table>";
        echo "<tbody>";
        echo <<<EOF
      <tr>
         <th>id</th>
         <th>nombre</th>
         <th>numero de start power</th>
         <th>numero de skins</th>
      </tr>
EOF;
        echo <<<EOF
      <tr>
         <td>{$tmp->id}</td>
         <td >{$tmp->nombre}</td>
         <td >{$tmp->num_start_power}</td>
         <td >{$tmp->num_skins}</td>
      </tr>
   </tbody></table>
EOF;
} ?>

</body>
</html>
