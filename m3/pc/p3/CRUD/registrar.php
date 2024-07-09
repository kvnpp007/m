<?php
include("conexion.php");
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
    <title>Formulario: Registrado</title>
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
        <nav>
			<div class="topnav">
				<a href="index.php">REGRESAR</a>
				<a href="http://localhost/c/pc/p2/" style="float:right">INDEX</a>
			</div>
		</nav>
    </header>
	<div class="card"><center><h6>Formulario de registro.</h6></center></div>
    <section>
		<div class="container">
			<div class="card">
				<div class="row">
					<h1>Alta: Paciente</h1>
                    <?php
                        if(isset($_REQUEST['id'])) {
                            echo "Identificador: ".$_REQUEST['id']. "<br>";
                        }
                        echo "RFC: ".strtoupper($_REQUEST['rfc'])."<br>";
                        echo "Nombre: ".$_REQUEST['nombre']."<br>";
                        echo "Apellido Paterno: ".$_REQUEST['ap_paterno']."<br>";
                        echo "Apellido Materno: ".$_REQUEST['ap_materno']."<br>";
                        echo "Dirección: ".$_REQUEST['direccion']."<br>";
                        echo "Ciudad: ".$_REQUEST['ciudad']."<br>";
                        echo "Estado: ".$_REQUEST['estado']."<br>";
                        echo "Teléfono: ".$_REQUEST['telefono']."<br>";
                        echo "Cuenta: ".$_REQUEST['cuenta']."<br>";
                        echo "Habitación: ".$_REQUEST['habitacion']."<br>";
                        echo "Generales: ".$_REQUEST['generales']."<br>";
                        $id = $_REQUEST['id'];
                        $rfc = strtoupper($_REQUEST['rfc']);
                        $nombre = $_REQUEST['nombre'];
                        $ap_paterno = $_REQUEST['ap_paterno'];
                        $ap_materno = $_REQUEST['ap_materno'];
                        $direccion = $_REQUEST['direccion'];
                        $ciudad = $_REQUEST['ciudad'];
                        $estado = $_REQUEST['estado'];
                        $telefono = $_REQUEST['telefono'];
                        $cuenta = $_REQUEST['cuenta'];
                        $habitacion = $_REQUEST['habitacion'];
                        $generales = $_REQUEST['generales'];
                        $sql = "INSERT INTO pacientes (id, rfc, nombre, ap_paterno, ap_materno, direccion, ciudad, estado, telefono, cuenta, habitacion, generales) VALUES ('$id', '$rfc', '$nombre', '$ap_paterno', '$ap_materno', '$direccion', '$ciudad', '$estado', '$telefono', '$cuenta', '$habitacion', '$generales')";
                        if(mysqli_query($cn, $sql)) {
                            echo "Datos grabados.";
                        } else {
                            echo "ERROR: ".$sql."<br>".mysqli_error($cn);
                        }
                        mysqli_close($cn);
                    ?>
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