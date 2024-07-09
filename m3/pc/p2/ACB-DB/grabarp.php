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
    <title>Formulario: Completado</title>
</head>
<body>
    <header>
        <div class="header">
                    <h1>Base de Datos</h1>
                    <p>"SISTEMA DE ALTA / CONSULTA"</p>
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
					<h1>Alta: Producto</h1>
                    <?php
                        if(isset($_REQUEST['id'])) {
                            echo "ID: ".$_REQUEST['id']. "<br>";
                        }
                        echo "Descripcción: ".$_REQUEST['description']. "<br>";
                        echo "Precio: ".$_REQUEST['price']. "<br>";
                        echo "Unidad: ".$_REQUEST['unit']. "<br>";
                        echo "Cantidad: ".$_REQUEST['quantity']. "<br>"; 
                        $key=$_REQUEST['id'];
                        $d=$_REQUEST['description'];
                        $p=$_REQUEST['price'];
                        $u =$_REQUEST['unit'];
                        $q=$_REQUEST['quantity'];
                        $sql = "INSERT INTO productos VALUES('$key','$d','$p','$u','$q')";
                        if(mysqli_query($cn,$sql)) {
                            echo "Datos Grabados.";
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