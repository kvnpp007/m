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
    <title>Formulario</title>
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
        <nav>
			<div class="topnav">
				<a href="index.php">REGRESAR</a>
				<a href="http://localhost/c/pc/p2/" style="float:right">INDEX</a>
			</div>
		</nav>
    </header>
    <section>
		<div class="container">
			<div class="card">
				<div class="row">
					<h1>Alta:</h1>
                    <?php
                        if(isset($_REQUEST['id'])) {
                            echo "Identificador: ".$_REQUEST['id']. "<br>";
                        }
                        echo "Nombre: ".$_REQUEST['nombre']."<br>";
                        echo "Propietario: ".$_REQUEST['propietario']."<br>";
                        echo "Especie: ".$_REQUEST['especie']."<br>";
                        echo "sexo: ".$_REQUEST['sexo']."<br>";
                        echo "Fecha de Nacimiento: ".$_REQUEST['fechaNacimiento']."<br>";
                        $id=$_REQUEST['id'];
                        $nombre=$_REQUEST['nombre'];
                        $propietario=$_REQUEST['propietario'];
                        $especie=$_REQUEST['especie'];
                        $sexo=$_REQUEST['sexo'];
                        $fechaNacimiento=$_REQUEST['fechaNacimiento'];
                        $sql = "INSERT INTO mascotas VALUES('$id','$nombre','$propietario','$especie','$sexo','$fechaNacimiento')";
                        if(mysqli_query($cn,$sql)) {
                            echo "Datos grabados.";
                        } else {
                            echo "ERROR: ".$sql."<br>".mysqli_error($cn);
                        }
                        mysqli_close($cn)
                    ?>
				</div>
			</div>
		</div>
    </section>
    <footer>
        <div class="footer">
        <h2>Pérez Pérez, Kevin Fernando.</h2>
        <h3>Cuarto Semestre de Programación.</h3>
        </div>
    </footer>
</body>
</html>
<!-- Pérez Pérez, Kevin Fernando. Cuarto Semestre de Programación T.M.-->