<html>
<head><title>Operando variables</title>
<style>
body      {text-align:center;}
table {	text-align:center; width:550px; background-color: lavender;}
table th {border:thin inset; width:9%; font-size:18; font-weigth:bold;color:blue;}
table td {border:thin inset; width:9%;	}
.cabecera {font-weigth:bold;color:maroon;}			 
</style>
</head>

<body>
<?php 
$codigo_error = error_reporting(0);

echo "práctica 2.1.<br>";
echo "$a";
error_reporting($codigo_error);

?>

</body>
</html>