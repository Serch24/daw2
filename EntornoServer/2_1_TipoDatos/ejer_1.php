<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="Sergio Andrés" content="Yaccelga Castillo">
    <title>Ejercicio 1</title>
    <style>
    body      {text-align:center;}
    table {	text-align:center; width:550px; background-color: lavender;}
    table th {border:thin inset; width:9%; font-size:18; font-weigth:bold;color:blue;}
    table td {border:thin inset; width:9%;	}
    .cabecera {font-weigth:bold;color:maroon;}
    </style>
</head>
<body>
    <!-- combinar los diferentes tipos de datos -->
        <?php

            $enterno = 5;
            $real_ = 5.6;
            $cadena = ":D";
            $sin_definir = null;
            $boolean = true;

            $resul_mas_entero_decimal = $enterno + $real_;
            $resul_por_entero_decimal = $enterno * $real_;
            $resul_mayor_entero_decimal = $enterno > $real_;

            $resu_mas_entero_cadena = $enterno + $cadena;
            $resu_por_entero_cadena = $enterno * $cadena;
            $resul_mayor_entero_cadena = $enterno > $cadena;

            $resu_mas_entero_booleano = $enterno + $boolean;
            $resu_por_entero_booleano = $enterno * $boolean;
            $resul_mayor_entero_booleano = $enterno > $boolean;

            $resu_mas_entero_null = $enterno + $sin_definir;
            $resu_por_entero_null = $enterno * $sin_definir;
            $resul_mayor_entero_null = $enterno > $sin_definir;


            $resu_mas_cadena_booleano = $cadena + $boolean;
            $resu_por_cadena_booleano = $cadena * $boolean;
            $resul_mayor_cadena_booleano = $cadena > $boolean;

            $resu_mas_cadena_null = $cadena + $sin_definir;
            $resu_por_cadena_null = $cadena * $sin_definir;
            $resul_mayor_cadena_null = $cadena > $sin_definir;

            $resu_mas_booleano_null = $enterno + $sin_definir;
            $resu_por_booleano_null = $enterno * $sin_definir;
            $resul_mayor_booleano_null = $enterno > $sin_definir;


            echo "
                <table>
                <tr>
                <th>
                Operaciones
                </th>
                </tr>

                <tr>
                <td>
                Valores
                </td>
                <td> a + b </td>
                <td> a * b </td>
                <td> a > b </td>
                </tr>
                
                <tr>
                <td> entero=$enterno, decimal=$real_ </td>
                <td> $resul_mas_entero_decimal</td>
                <td> $resul_por_entero_decimal</td>
                <td> $resul_mayor_entero_decimal</td>        
                </tr>

                <tr>
                <td> entero=$enterno, cadena=$cadena </td>
                <td> $resul_mas_entero_cadena</td>
                <td> $resul_por_entero_cadena</td>
                <td> $resul_mayor_entero_cadena</td>        
                </tr>
                
                <tr>
                <td> entero=$enterno, booleano=$boolean </td>
                <td> $resul_mas_entero_booleano</td>
                <td> $resul_por_entero_booleano</td>
                <td> $resul_mayor_entero_booleano</td>        
                </tr>

                <tr>
                <td> entero=$enterno, null=$sin_definir </td>
                <td> $resul_mas_entero_null</td>
                <td> $resul_por_entero_null</td>
                <td> $resul_mayor_entero_null</td>        
                </tr>
                
                <tr>
                <td> cadena=$cadena, booleano=$boolean </td>
                <td> $resul_mas_cadena_booleano</td>
                <td> $resul_por_cadena_booleano</td>
                <td> $resul_mayor_cadena_booleano</td>        
                </tr>

                <tr>
                <td> Cadena=$cadena, null=$sin_definir </td>
                <td> $resul_mas_cadena_null</td>
                <td> $resul_por_cadena_null</td>
                <td> $resul_mayor_cadena_null</td>        
                </tr>

                <tr>
                <td> booleano=$boolean, null=$sin_definir </td>
                <td> $resul_mas_cadena_null</td>
                <td> $resul_por_cadena_null</td>
                <td> $resul_mayor_cadena_null</td>        
                </tr>

                </table>";

        ?>
</body>
</html>