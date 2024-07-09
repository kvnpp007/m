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
                    <p>"SISTEMA DE ALTA / BAJA / CONSULTA"</p>
        </div>
        <nav>
			<div class="topnav">
				<a href="index.php">REGRESAR</a>
				<a href="http://localhost/c/pc/p2/" style="float:right">INDEX</a>
			</div>
		</nav>
    </header>
	<div class="card"><center><h6>Formulario de baja de cliente.</h6></center></div>
    <section>
		<div class="container">
			<div class="card">
				<div class="row">
					<h1>Baja: Cliente</h1>
                    <?php
                        if(isset($_POST['action']) && $_POST['action'] === 'delete') {
                            if(isset($_POST['id'])) {
                                $key = htmlspecialchars($_POST['id']);
                                $stmt = $cn->prepare("DELETE FROM cliente WHERE id = ?");
                                $stmt->bind_param("i", $key);  
                                if($stmt->execute()) {
                                    echo "Datos eliminados.";
                                } else {
                                    echo "ERROR: " . $stmt->error;
                                }
                                $stmt->close();
                                } else {
                                    echo "Identificador de cliente requerido.";
                                }
                            } else {
                            echo "Acción no válida.";
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
        <h3>Cuarto Semestre de Programación.</h3>
        </div>
    </footer>
</body>
</html>