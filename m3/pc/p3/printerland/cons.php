<?php
include("conexion.php");
$cn=conectar();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
</head>
<body>
    <form action="cons.php" method="post">
        |Clave| <input type="radio" name="ra" value="c" onchange="toggleInput()">
        |Descripción| <input type="radio" name="ra" value="d" onchange="toggleInput()">
        |Marca| <input type="radio" name="ra" value="m" onchange="toggleInput()">
        <br><br>
        Clave: <input type="text" name="clave" value="clave" id="clave" disabled>
        <br><br>
        Descripción: <input type="text" name="desc" id="desc" disabled>
        <br><br>
        Marca: <select name="marca" id="marca" disabled>
            <option value="0">Marca</option>
            <option value="HP">HP</option>
            <option value="Epson">Epson</option>
        </select>
        <?php
            if(isset($_POST["clave"])){
                $c=$_POST["clave"];
                echo "<table border='1'>
                <tr>
                    <td>Clave</td>
                    <td>Descripción</td>
                    <td>Moneda</td>
                    <td>Precio</td>
                </tr>";
                $sql="SELECT * FROM consumible WHERE Clave='w'";
                 $r=mysqli_query($cn,$sql);
                  while($m=mysqli_fetch_array($r)){
            }
        ?>
        <tr>
            <td><?php echo $m['Clave'] ?> </td>
            <td><?php echo $m['Descripcion'] ?> </td>
            <td><?php echo $m['Moneda'] ?> </td>
            <td><?php echo $m['Precio'] ?> </td>
</tr>

<?php }

echo "</table>";

?>
        <br><br>
        <input type="submit" value="Enviar">
    </form>

    <script>
        function toggleInput() {
            const radioValue = document.querySelector('input[name="ra"]:checked').value;

            // Obtiene los elementos de entrada
            const clave = document.getElementById('clave');
            const desc = document.getElementById('desc');
            const marca = document.getElementById('marca');

            // Deshabilita todos los campos al inicio
            clave.disabled = true;
            desc.disabled = true;
            marca.disabled = true;

            // Habilita el campo correspondiente según el valor del radio seleccionado
            if (radioValue === 'c') {
                clave.disabled = false;
            } else if (radioValue === 'd') {
                desc.disabled = false;
            } else if (radioValue === 'm') {
                marca.disabled = false;
            }
        }
    </script>
    <a href="index.html">Regresar</a>
</body>
</html>
