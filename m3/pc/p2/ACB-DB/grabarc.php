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
    <title>Formulario: Grabado</title>
</head>
<body>
    <header>
        <div class="header">
                    <h1>Base de Datos Escolar</h1>
                    <p>"SISTEMA DE ALTA / BAJA / CONSULTA"</p>
        </div>
        <nav>
			<div class="topnav">
				<a href="index.php">REGRESAR</a>
				<a href="http://localhost/c/pc/p2/" style="float:right">INDEX</a>
			</div>
		</nav>
    </header>
	<div class="card"><center><h6>Formulario de registro de cliente.</h6></center></div>
    <section>
		<div class="container">
			<div class="card">
				<div class="row">
					<h1>Alta: Cliente</h1>
                    <?php
                        if(isset($_REQUEST['id'])) {
                            echo "ID: ".$_REQUEST['id']. "<br>";
                        }
                        echo "RFC: ".$_REQUEST['rfc']. "<br>";
                        echo "Nombre: ".$_REQUEST['nombre']. "<br>";
                        echo "Apellido paterno: ".$_REQUEST['appat']. "<br>";
                        echo "Apellido materno: ".$_REQUEST['apmat']. "<br>"; 
                        echo "Dirección: ".$_REQUEST['direccion']. "<br>";
                        echo "Teléfono: ".$_REQUEST['telefono']. "<br>";
                        echo "Correo: ".$_REQUEST['correo']. "<br>";
                        $key=$_REQUEST['id'];
                        $r=$_REQUEST['rfc'];
                        $n=$_REQUEST['nombre'];
                        $p=$_REQUEST['appat'];
                        $m =$_REQUEST['apmat'];
                        $d=$_REQUEST['direccion'];
                        $t=$_REQUEST['telefono'];
                        $c=$_REQUEST['correo'];
                        $sql = "INSERT INTO cliente VALUES('$key','$r','$n','$p','$m','$d','$t','$c')";
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