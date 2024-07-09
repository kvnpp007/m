<?php
include ("conexion.php");
$cn=conectar();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver</title>
</head>
<body>
    <br>
    <table border='1'>
        <tr>
            <td>Clave</td>
            <td>Descripción</td>
            <td>Moneda</td>
            <td>Precio</td>
        </tr>

<?php
    $sql="SELECT * FROM consumible";
    $r=mysqli_query($cn,$sql);
    while($m=mysqli_fetch_array($r)){

?>

<tr>
            <td><?php echo $m['Clave'] ?> </td>
            <td><?php echo $m['Descripcion'] ?> </td>
            <td><?php echo $m['Moneda'] ?> </td>
            <td><?php echo $m['Precio'] ?> </td>
</tr>

<?php } ?>

    </table>
    
    <a href="index.html">Regresar</a>

</body>
</html>