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
    <title>Veterinaria</title>
</head>
<body>
    <header>
        <div class="header">
            <h1>Veterinaria</h1>
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
                                        <label for="id">ID</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="text" name="id" id="id" placeholder="1234567890">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-25">
                                        <label for="propietario">Propietario</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="text" name="propietario" id="propietario" placeholder="Nombre del propietario">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-25">
                                        <label for="especie">Especie</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="text" name="especie" id="especie" placeholder="Especie">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-25">
                                        <label for="sexo">Sexo</label>
                                    </div>
                                    <div class="col-75">
                                        <select name="sexo" id="sexo">
                                            <option selected disabled value="">Seleccione sexo</option>
                                            <option value="Macho">Macho</option>
                                            <option value="Hembra">Hembra</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-25">
                                        <label for="ordenar">Ordenar por fecha de nacimiento</label>
                                    </div>
                                    <div class="col-75">
                                        <select name="ordenar" id="ordenar">
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
                                        $id = $_POST['id'] ?? '';
                                        $propietario = $_POST['propietario'] ?? '';
                                        $especie = $_POST['especie'] ?? '';
                                        $sexo = $_POST['sexo'] ?? '';
                                        $ordenar = $_POST['ordenar'] ?? '';
                                        $conditions = [];
                                        $order_clause = '';
                                        if (!empty($id)) {
                                            $conditions[] = "id='$id'";
                                        }
                                        if (!empty($propietario)) {
                                            $conditions[] = "propietario LIKE '%$propietario%'";
                                        }
                                        if (!empty($especie)) {
                                            $conditions[] = "especie LIKE '%$especie%'";
                                        }
                                        if (!empty($sexo)) {
                                            $conditions[] = "sexo='$sexo'";
                                        }
                                        switch ($ordenar) {
                                            case 'menor':
                                                $order_clause = "ORDER BY fechaNacimiento ASC";
                                                break;
                                            case 'mayor':
                                                $order_clause = "ORDER BY fechaNacimiento DESC";
                                                break;
                                            default:
                                                $order_clause = "ORDER BY fechaNacimiento ASC";
                                        }
                                        if (!empty($conditions)) {
                                            $sql = "SELECT * FROM mascotas WHERE " . implode(' AND ', $conditions) . " $order_clause";
                                        } else {
                                            echo '<p>No se seleccionó un criterio de búsqueda válido.</p>';
                                            exit;
                                        }
                                        $result = mysqli_query($cn, $sql);
                                        if ($result && mysqli_num_rows($result) > 0) {
                                            echo '
                                            <table>
                                                    <tr>
                                                        <td style="padding: 10px;"><b>Nombre</b></td>
                                                        <td style="padding: 10px;"><b>Propietario</b></td>
                                                        <td style="padding: 10px;"><b>Especie</b></td>
                                                        <td style="padding: 10px;"><b>Sexo</b></td>
                                                        <td style="padding: 10px;"><b>Fecha de Nacimiento</b></td>
                                                    </tr>
                                            ';
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo '
                                                    <tr>
                                                    <td>' . $row['nombre'] . '</td>
                                                    <td>' . $row['propietario'] . '</td>
                                                    <td>' . $row['especie'] . '</td>
                                                    <td>' . $row['sexo'] . '</td>
                                                    <td>' . $row['fechaNacimiento'] . '</td>
                                                    <td>
                                                        <button type="button" class="icon-button-edit" onclick="window.location.href=\'modificar.php?id=' . $row['id'] . '\'">
                                                            <span class="material-symbols-outlined">Edit</span>
                                                        </button>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="icon-button-delete" onclick="window.location.href=\'suprimir.php?id=' . $row['id'] . '\'">
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