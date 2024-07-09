<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculos, redondeo y formato.</h1>
    <?php
        $precioneto=108.34;
        $iva=$precioneto*0.16;
        $resultado=$precioneto+$iva;
        echo"El precio es de ";
            echo $precioneto;
        echo " y el iva del 16% es $iva";
        echo "<br><br>";
        echo "Resultado: ";
        echo round($resultado,2);
        echo " con round() <br><br>";
        echo $resultado;
        echo " normal \n";
        echo "<br><br>";
        $resultado = sprintf("%01.2f", $resultado);
        echo "Usando la función SPRINTF se ve así: ";
        echo $resultado;
    ?>
</body>
</html>
