<?php
include("funcioneseditar.php");
$cn = conectar();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,400,0,0" />
    <link rel="stylesheet" href="styleform.css">
    <link rel="icon" href="img/cimarron.png">
    <title>Hospital</title>
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
            <h1>Red de Hospitales</h1>
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
                                    <label for="rfc">RFC</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="rfc" id="rfc" placeholder="Ingrese RFC">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <label for="id">ID</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="id" id="id" placeholder="Ingrese ID">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <label for="nombre">Nombre</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="nombre" id="nombre" placeholder="Ingrese Nombre">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <label for="ap_paterno">Apellido Paterno</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="ap_paterno" id="ap_paterno" placeholder="Ingrese Apellido Paterno">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <label for="habitacion">Habitación</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="habitacion" id="habitacion" placeholder="Ingrese Número de Habitación">
                                </div>
                            </div>
                            <br>
                            <input type="submit" value="Buscar">
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="card">
                    <div class="row">
                        <h1>Consulta: Pacientes</h1>
                        <main>
                            <?php
                            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                                $conditions = [];
                                $sql = "SELECT * FROM pacientes WHERE 1 ";
                                if (!empty($_POST['rfc'])) {
                                    $rfc = mysqli_real_escape_string($cn, strtolower($_POST['rfc']));
                                    $conditions[] = "LOWER(RFC) LIKE '%$rfc%'";
                                }
                                if (!empty($_POST['id'])) {
                                    $id = mysqli_real_escape_string($cn, $_POST['id']);
                                    $conditions[] = "id = '$id'";
                                }
                                if (!empty($_POST['nombre'])) {
                                    $nombre = mysqli_real_escape_string($cn, strtolower($_POST['nombre']));
                                    $conditions[] = "LOWER(nombre) LIKE '%$nombre%'";
                                }
                                if (!empty($_POST['ap_paterno'])) {
                                    $ap_paterno = mysqli_real_escape_string($cn, strtolower($_POST['ap_paterno']));
                                    $conditions[] = "LOWER(ap_paterno) LIKE '%$ap_paterno%'";
                                }
                                if (!empty($_POST['habitacion'])) {
                                    $habitacion = mysqli_real_escape_string($cn, $_POST['habitacion']);
                                    $conditions[] = "habitacion = '$habitacion'";
                                }
                                if (!empty($conditions)) {
                                    $sql .= " AND " . implode(' AND ', $conditions);
                                }
                                $result = mysqli_query($cn, $sql);
                                if ($result && mysqli_num_rows($result) > 0) {
                                    echo '
                                    <table>
                                        <tr>
                                            <th>ID</th>
                                            <th>RFC</th>
                                            <th>Nombre</th>
                                            <th>Apellido Paterno</th>
                                            <th>Apellido Materno</th>
                                            <th>Dirección</th>
                                            <th>Ciudad</th>
                                            <th>Estado</th>
                                            <th>Teléfono</th>
                                            <th>Cuenta</th>
                                            <th>Habitación</th>
                                            <th>Generales</th>
                                        </tr>
                                    ';
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo '
                                        <tr>
                                            <td>' . htmlspecialchars($row['id']) . '</td>
                                            <td>' . htmlspecialchars($row['rfc']) . '</td>
                                            <td>' . htmlspecialchars($row['nombre']) . '</td>
                                            <td>' . htmlspecialchars($row['ap_paterno']) . '</td>
                                            <td>' . htmlspecialchars($row['ap_materno']) . '</td>
                                            <td>' . htmlspecialchars($row['direccion']) . '</td>
                                            <td>' . htmlspecialchars($row['ciudad']) . '</td>
                                            <td>' . htmlspecialchars($row['estado']) . '</td>
                                            <td>' . htmlspecialchars($row['telefono']) . '</td>
                                            <td>' . htmlspecialchars($row['cuenta']) . '</td>
                                            <td>' . htmlspecialchars($row['habitacion']) . '</td>
                                            <td>' . htmlspecialchars($row['generales']) . '</td>
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
            <h2>Camacho Orantes, Ángel Isaac.</h2>
            <h3>Cuarto Semestre de Programación.</h3>
        </div>
    </footer>
</body>
</html>
<!-- Pérez Pérez, Kevin Fernando. Cuarto Semestre de Programación T.M.-->