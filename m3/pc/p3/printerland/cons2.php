<?php
include("conexion.php");
$cn = conectar();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
    <script>
        function toggleInput() {
            const radioValue = document.querySelector('input[name="ra"]:checked').value;
            const clave = document.getElementById('clave');
            const desc = document.getElementById('desc');
            const marca = document.getElementById('marca');

            clave.disabled = true;
            desc.disabled = true;
            marca.disabled = true;

            if (radioValue === 'c') {
                clave.disabled = false;
            } else if (radioValue === 'd') {
                desc.disabled = false;
            } else if (radioValue === 'm') {
                marca.disabled = false;
            }
        }
    </script>
</head>
<body>
    <form action="cons2.php" method="post">
        |Clave| <input type="radio" name="ra" value="c" onchange="toggleInput()">
        |Descripción| <input type="radio" name="ra" value="d" onchange="toggleInput()">
        |Marca| <input type="radio" name="ra" value="m" onchange="toggleInput()">
        <br><br>
        Clave: <input type="text" name="clave" id="clave" disabled>
        <br><br>
        Descripción: <input type="text" name="desc" id="desc" disabled>
        <br><br>
        Marca: <select name="marca" id="marca" disabled>
            <option value="0">Marca</option>
            <option value="HP">HP</option>
            <option value="Epson">Epson</option>
        </select>
        <br><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $clave = $_POST['clave'] ?? '';
        $desc = $_POST['desc'] ?? '';
        $marca = $_POST['marca'] ?? '';

        $sql = "SELECT * FROM consumible WHERE ";
        if (!empty($clave)) {
            $sql .= "Clave='$clave'";
        } elseif (!empty($desc)) {
            $sql .= "Descripcion LIKE '%$desc%'";
        } elseif (!empty($marca)) {
            $sql .= "Descripcion LIKE '%$marca%'";
        } else {
            echo "No se seleccionó un criterio de búsqueda válido.";
            exit;
        }

        $result = mysqli_query($cn, $sql);
        if ($result && mysqli_num_rows($result) > 0) {
            echo "<table border='1'>
            <tr>
                <td>Clave</td>
                <td>Descripción</td>
                <td>Moneda</td>
                <td>Precio</td>
            </tr>";

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                    <td>{$row['Clave']}</td>
                    <td>{$row['Descripcion']}</td>
                    <td>{$row['Moneda']}</td>
                    <td>{$row['Precio']}</td>
                </tr>";
            }
            echo "</table>";
        } else {
            echo "No se encontraron resultados.";
        }
    }
    ?>
    <br><br>
    <a href="index.html">Regresar</a>
</body>
</html>
