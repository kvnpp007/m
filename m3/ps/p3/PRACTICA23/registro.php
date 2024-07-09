<?php
    include_once('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleform.css">
    <link rel="icon" href="img/cimarron.png">
    <title>Práctica 24</title>
</head>
<body>
    <header>
        <div class="header">
                    <h1>Base de Datos Escolar</h1>
                    <p>"Centro de Bachillerato Tecnológico Industrial y de Servicios Número 230"</p>
        </div>
        <nav>
			<div class="topnav">
				<a href="registro.html">REGRESAR</a>
				<a href="index.html" style="float:right">INDEX</a>
			</div>
		</nav>
    </header>
    <section>
		<div class="container">
			<div class="card">
				<div class="row">
					<h1>Registrado</h1>
                    <?php
                        echo "Nombres: ".$_REQUEST['nombres']. "<br>";
                        echo "Apellidos: ".$_REQUEST['apellidos']. "<br>";
                        echo "Dirección: ".$_REQUEST['direccion']. "<br>";
                        echo "Telefono: ".$_REQUEST['telefono']. "<br>"; 
                        echo "Número de Control: ".$_REQUEST['ncontrol']. "<br>";
                        echo "Correo Electrónico: ".$_REQUEST['email']. "<br>";
                        $nombres=$_POST['nombres'];
                        $apellidos=$_POST['apellidos'];
                        $direccion=$_POST['direccion'];
                        $telefono=$_POST['telefono'];
                        $ncontrol=$_POST['ncontrol'];
                        $email=$_POST['email'];
                        $conectar = conn();
                        $sql = "INSERT INTO ningreso VALUES('$nombres','$apellidos','$direccion','$telefono','$ncontrol','$email')";
                        if(mysqli_query($conectar,$sql)) {
                            echo "<br>Datos grabados.";
                        } else {
                            echo "ERROR: ".$sql."<br>".mysqli_error($conectar);
                        }
                        mysqli_close($conectar);
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