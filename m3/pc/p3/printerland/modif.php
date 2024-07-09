<?php
include("conexion.php");
$cn=conectar();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>
</head>
<body>
    <form action="modif.php" method="post" >
    Clave del producto a modificar: <input type="text" name="cl" >
    <input type="submit" value="Modificar" >
    </form>
    <?php
        if(isset($_POST['cl'])){
            $cl=$_POST['cl'];
            $sql="SELECT * FROM consumible WHERE Clave='$cl'";
            $r=mysqli_query($cn,$sql);

            if(mysqli_num_rows($r)>0){
                while($row=mysqli_fetch_assoc($r)){
                    echo "Clave ".$row["Clave"]." -Descripción ".$row["Descripcion"]." -Moneda ".$row["Moneda"]. " -Precio ".$row["Precio"]."<br>";
                }
            }else{
                echo "0 resultados";
            }
            echo "<form action='modif.php' method='post'>";
            echo "Reafirme la clave del producto: <input type='text' name='cla'><br>";
            echo "Nueva descripción: <input type='text' name='des'><br>";
            echo "Nueva moneda: <input type='text' name='mon'><br>";
            echo "Nuevo precio: <input type='number' name='pre'><br>";
            echo "<input type='submit' value='Aceptar'>";
            echo "</form>";
            
        }
        if(isset($_POST['cla'])){
            $cla=$_POST['cla'];
            $name=$_POST['des'];
            $c=$_POST['mon'];
            $e=$_POST['pre'];

            $sql="UPDATE consumible SET Descripcion='$name',Moneda='$c',Precio='$e' WHERE Clave='$cla' ";
            $r=mysqli_query($cn,$sql);
            if($r){
                echo "Aprovado";
            }else{
                echo "Error".$sql."<br>".mysqli_error($cn);
            }
        }
        mysqli_close($cn);
    ?>
    <br>
    <a href="index.html">Regresar</a>
</body>
</html>