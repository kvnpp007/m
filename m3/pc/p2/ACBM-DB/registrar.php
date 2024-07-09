<?php
include("conexion.php");
$cn = conectar();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleform.css">
    <link rel="icon" href="img/cimarron.png">
    <title>Formulario: Registrado</title>
</head>
<body>
    <header>
        <div class="header">
            <h1>Biblioteca</h1>
            <p>Base de Datos</p>
        </div>
        <nav>
			<div class="topnav">
				<a href="index.php">REGRESAR</a>
				<a href="http://localhost/c/pc/p2/" style="float:right">INDEX</a>
			</div>
		</nav>
    </header>
	<div class="card"><center><h6>Formulario de registro de libros.</h6></center></div>
    <section>
		<div class="container">
			<div class="card">
				<div class="row">
					<h1>Alta: Cliente</h1>
                    <?php
                        if(isset($_REQUEST['id'])) {
                            echo "Identificador: ".$_REQUEST['id']. "<br>";
                        }
                        echo "Clasificaión: ".$_REQUEST['clasif']."<br>";
                        echo "Nombre: ".$_REQUEST['nombre']."<br>";
                        echo "Edición: ".$_REQUEST['edicion']."<br>";
                        echo "Autor: ".$_REQUEST['autor']."<br>";
                        echo "Año: ".$_REQUEST['year']."<br>";
                        echo "Ejemplares: ".$_REQUEST['ejemplares']."<br>";
                        echo "Genero: ".$_REQUEST['genero']."<br>";
                        $key=$_REQUEST['id'];
                        $c=$_REQUEST['clasif'];
                        $n=$_REQUEST['nombre'];
                        $e=$_REQUEST['edicion'];
                        $a =$_REQUEST['autor'];
                        $y=$_REQUEST['year'];
                        $ej=$_REQUEST['ejemplares'];
                        $g=$_REQUEST['genero'];
                        $sql = "INSERT INTO libros VALUES('$key','$c','$n','$e','$a','$y','$ej','$g')";
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
        <h3>Camacho Orantes, Ángel Isaac.</h3>
        <h3>Cuarto Semestre de Programación.</h3>
        </div>
    </footer>
</body>
</html>
<!-- Pérez Pérez, Kevin Fernando. Cuarto Semestre de Programación T.M.-->