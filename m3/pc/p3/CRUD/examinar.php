<?php
include("funcioneseditar.php");
$conexion = conectar();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,400,0,0" />
    <link rel="stylesheet" href="styleform.css">
    <link rel="icon" href="img/cimarron.png">
    <link rel="icon" href="img/cimarron.png">
    <title>Consulta: Pacientes</title>
    <style>
        th::after {
            content: '\25B2'; 
            position: absolute;
            right: 5px;
            font-size: 10px;
        }
        th:active::after {
            transform: rotate(180deg);
        }
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
    <nav>
			<div class="topnav">
				<a href="index.php">REGRESAR</a>
				<a href="http://localhost/c/pc/p2/" style="float:right">INDEX</a>
			</div>
		</nav>
    <section>
		<div class="container">
			<div class="card">
				<div class="row">
                    <h1>Consulta: Pacientes</h1>
                    <main>
                        <table>
                            <tr>
                                <td style="padding: 10px;"><b>ID</b></td>
                                <td style="padding: 10px;"><b>RFC</b></td>
                                <td style="padding: 10px;"><b>Nombre</b></td>
                                <td style="padding: 10px;"><b>Ap. Paterno</b></td>
                                <td style="padding: 10px;"><b>Ap. Materno</b></td>
                                <td style="padding: 10px;"><b>Dirección</b></td>
                                <td style="padding: 10px;"><b>Ciudad</b></td>
                                <td style="padding: 10px;"><b>Estado</b></td>
                                <td style="padding: 10px;"><b>Teléfono</b></td>
                                <td style="padding: 10px;"><b>Cuenta</b></td>
                                <td style="padding: 10px;"><b>Habitación</b></td>
                                <td style="padding: 10px;"><b>Generales</b></td>
                            </tr>     
                            <?php
                                $sql ="SELECT * FROM pacientes";
                                $resultado=mysqli_query($conexion,$sql);
                                while($mostrar=mysqli_fetch_array($resultado)) {
                            ?> 
                            <tr>
                            <td>
                                <?php echo $mostrar['id']?></td>
                                <td><?php echo $mostrar['rfc']?></td>
                                <td><?php echo $mostrar['nombre']?></td>
                                <td><?php echo $mostrar['ap_paterno']?></td>
                                <td><?php echo $mostrar['ap_materno']?></td>
                                <td><?php echo $mostrar['direccion']?></td>
                                <td><?php echo $mostrar['ciudad']?></td>
                                <td><?php echo $mostrar['estado']?></td>
                                <td><?php echo $mostrar['telefono']?></td>
                                <td><?php echo $mostrar['cuenta']?></td>
                                <td><?php echo $mostrar['habitacion']?></td>
                                <td><?php echo $mostrar['generales']?></td>
                                <td>
                                    <button type="button" class="icon-button-edit" onclick="window.location.href='modificar.php?id=<?php echo $mostrar['id']; ?>'">
                                        <span class="material-symbols-outlined">Edit</span>
                                    </button>
                                </td>
                                <td>
                                    <button type="button" class="icon-button-delete" onclick="window.location.href='eliminar.php?id=<?php echo $mostrar['id']; ?>'">
                                        <span class="material-symbols-outlined">Delete</span>
                                    </button>
                                </td>
                            </tr>
                            <?php
                            }
                            ?>
                        </table>
                    </main>
				</div>
			</div>
		</div>
    </section>
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