<?php
include("conexion.php");
$cn=conectar();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grabar Datos</title>
</head>
<body>
    <h1>Datos para grabar</h1>
    <?php
    echo "Clave: ".$_POST['cla']."<br>";
    echo "Descripción: ".$_POST['name']."<br>";
    echo "Moneda: ".$_POST['mon']."<br>";
    echo "Precio: ".$_POST['pre']."<br>";
    
    $c=$_POST['cla'];
    $n=$_POST['name'];
    $e=$_POST['mon'];
    $a=$_POST['pre'];
    

    $sql="INSERT INTO consumible VALUES('$c','$n','$e','$a')";

    if(mysqli_query($cn,$sql)){
        echo "Aprovados";
    }else{
        echo "ERROR: ".$sql."<br>".mysqli_error($cn);
    }

    mysqli_close($cn);

    ?>
    <br/><br>

<a href="index.html">Regresar</a>

</body>
</html>