<?php
include("funcioneseditar.php");
$cn = conectar();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,400,0,0" />
    <link rel="stylesheet" href="styleform.css">
    <link rel="icon" href="img/cimarron.png">
    <title>Printerland</title>
    <style>
        .icon-button-db {
            background-color: black;
            color: gray;
            border: none;
            padding: 10px;
            margin: 5px;
            border-radius: 100%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .icon-button-add {
            background-color: gainsboro;
            color: black;
            border: none;
            padding: 10px;
            margin: 5px;
            border-radius: 100%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .icon-button-delete {
            background-color: crimson;
            color: white;
            border: none;
            padding: 10px;
            margin: 5px;
            border-radius: 100%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .icon-button-edit {
            background-color:mediumseagreen;
            color: white;
            border: none;
            padding: 10px;
            margin: 5px;
            border-radius: 100%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .icon-button-edit-add, .icon-button-edit, .icon-button-delete, .material-symbols-outlined {
            font-size: 24px;
        }
    </style>
</head>
<body>
    <header>
        <div class="header">
            <h1>Printerland</h1>
            <p>Base de Datos</p>
            <div style="text-align:center; text-decoration: none; display: flex;">
                <form action="agregar.php"><button type="submit" class="icon-button-add"><span class="material-symbols-outlined">add_box</span></button></form>
                <form action="modificar.php"><button type="submit" class="icon-button-edit"><span class="material-symbols-outlined">edit</span></button></form>
                <form action="eliminar.php"><button type="submit" class="icon-button-delete"><span class="material-symbols-outlined">delete</span></button></form>
                <form action="examinar.php"><button type="submit" class="icon-button-db"><span class="material-symbols-outlined">search</span></button></form>
                <form action="http://localhost/phpmyadmin/index.php?"><button type="submit" class="icon-button-db"><span class="material-symbols-outlined">database</span></button></form>
            </div>
        </div>
        </header>
        <main>
            <section>
                <div class="container">
                    <div class="card">
                        <div class="row">
                            <form action="index.php" method="post">
                                <div class="row">
                                    <div class="col-25">
                                        <label for="ra">Clave</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="text" name="clave" id="clave" placeholder="1234567890">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-25">
                                        <label for="ra">Marca</label>
                                    </div>
                                    <div class="col-75">
                                        <select name="marca" id="marca">
                                        <option selected disabled value="">Seleccione marca</option>
                                        <option value="Kyocera">Kyocera</option>
                                        <option value="HP">HP</option>
                                        <option value="Epson">Epson</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-25">
                                        <label for="ra">Descripción</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="text" name="desc" id="desc" placeholder='"Concepto" "Concepto"'>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-25">
                                        <label for="moneda">Moneda</label>
                                    </div>
                                    <div class="col-75">
                                        <select name="moneda" id="moneda">
                                            <option selected disabled value="">Seleccione moneda</option>
                                            <option value="m">Peso mexicano (m)</option>
                                            <option value="d">Dólar estadounidense (d)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-25">
                                        <label for="price">Rango de precios</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="text" name="price" id="price" placeholder='"10-100" o "1.234"'>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-25">
                                        <label for="order">Ordenar por precio</label>
                                    </div>
                                    <div class="col-75">
                                        <select name="order" id="order">
                                            <option selected disabled value="">Seleccione orden</option>
                                            <option value="menor">Menor a mayor</option>
                                            <option value="mayor">Mayor a menor</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <input type="submit" value="Enviar">
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="container">
                    <div class="card">
                        <div class="row">
                            <h1>Consulta: Ejemplares</h1>
                            <main>
                                <?php
                                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                                        $clave = $_POST['clave'] ?? '';
                                        $desc = $_POST['desc'] ?? '';
                                        $marca = $_POST['marca'] ?? '';
                                        $moneda = $_POST['moneda'] ?? '';
                                        $price = $_POST['price'] ?? '';
                                        $order = $_POST['order'] ?? '';
                                        $conditions = [];
                                        $order_clause = '';
                                        if (!empty($clave)) {
                                            $conditions[] = "Clave='$clave'";
                                        }
                                        if (!empty($desc)) {
                                            $conditions[] = "Descripcion LIKE '%$desc%'";
                                        }
                                        if (!empty($marca)) {
                                            $conditions[] = "Descripcion LIKE '%$marca%'";
                                        }
                                        if (!empty($moneda)) {
                                            $conditions[] = "Moneda='$moneda'";
                                        }
                                        if (!empty($price)) {
                                            if (strpos($price, '-') !== false) {
                                                list($min_price, $max_price) = explode('-', $price);
                                                $min_price = trim($min_price);
                                                $max_price = trim($max_price);
                                                if (is_numeric($min_price) && is_numeric($max_price)) {
                                                    $conditions[] = "Precio BETWEEN $min_price AND $max_price";
                                                }
                                            } else {
                                                $price = trim($price);
                                                if (is_numeric($price)) {
                                                    $conditions[] = "Precio = $price";
                                                }
                                            }
                                        }
                                        switch ($order) {
                                            case 'menor':
                                                $order_clause = "ORDER BY Precio ASC";
                                                break;
                                            case 'mayor':
                                                $order_clause = "ORDER BY Precio DESC";
                                                break;
                                            default:
                                                $order_clause = "ORDER BY Precio ASC";
                                        }
                                        if (!empty($conditions)) {
                                            $sql = "SELECT * FROM consumible WHERE " . implode(' AND ', $conditions) . " $order_clause";
                                        } else {
                                            echo '<p>No se seleccionó un criterio de búsqueda válido.</p>';
                                            exit;
                                        }
                                        if (!empty($conditions)) {
                                            $sql = "SELECT * FROM consumible WHERE " . implode(' AND ', $conditions) . " $order_clause";
                                        } else {
                                            echo '<p>No se seleccionó un criterio de búsqueda válido.</p>';
                                            exit;
                                        }
                                        $result = mysqli_query($cn, $sql);
                                        if ($result && mysqli_num_rows($result) > 0) {
                                            echo '
                                            <table>
                                                    <tr>
                                                        <td style="padding: 10px;"><b>Clave</b></td>
                                                        <td style="padding: 10px;"><b>Descripción</b></td>
                                                        <td style="padding: 10px;"><b>Moneda</b></td>
                                                        <td style="padding: 10px;"><b>Precio</b></td>
                                                    </tr>
                                            ';
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo '
                                                    <tr>
                                                    <td>' . $row['Clave'] . '</td>
                                                    <td>' . $row['Descripcion'] . '</td>
                                                    <td>' . $row['Moneda'] . '</td>
                                                    <td>' . $row['Precio'] . '</td>
                                                    <td>
                                                        <button type="button" class="icon-button-edit" onclick="window.location.href=\'modificar.php?Clave=' . $row['Clave'] . '\'">
                                                            <span class="material-symbols-outlined">Edit</span>
                                                        </button>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="icon-button-delete" onclick="window.location.href=\'suprimir.php?Clave=' . $row['Clave'] . '\'">
                                                            <span class="material-symbols-outlined">Delete</span>
                                                        </button>
                                                    </td>
                                                </tr>
                                                ';
                                            }
                                            echo "</table>";
                                        } else {
                                            echo "No se encontraron resultados.";
                                        }
                                    }
                                ?>
                            </main>
                        </div>
                    </div>
                </div>
            </section>
        </main>    
    <footer>
        <div class="footer">
        <h2>Pérez Pérez, Kevin Fernando.</h2>
        <h3>Cuarto Semestre de Programación.</h3>
        </div>
    </footer>
</body>
</html>
<!-- Pérez Pérez, Kevin Fernando. Cuarto Semestre de Programación T.M.-->