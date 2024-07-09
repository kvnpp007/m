<?php
include("funcioneseditp.php");
$conexion = conectar();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/d753ff1474.js"></script>
    <link rel="stylesheet" href="styleform.css">
    <link rel="icon" href="img/cimarron.png">
    <title>Consulta: Producto</title>
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
    <section>
		<div class="container">
			<div class="card">
				<div class="row">
					<h1>Consulta: Producto</h1>
                    <main>
                        <table>
                            <tr>
                                <td>Clave</td>
                                <td>Descripción</td>
                                <td>Precio</td>
                                <td>Unidad</td>
                                <td>Cantidad</td>
                            </tr>       
                            <?php
                            $sql ="SELECT * FROM productos";
                            $resultado=mysqli_query($conexion,$sql);
                            while($mostrar=mysqli_fetch_array($resultado)) {
                            ?> 
                            <tr>
                                <td><?php echo $mostrar['id']?></td>
                                <td><?php echo $mostrar['description']?></td>
                                <td><?php echo $mostrar['price']?></td>
                                <td><?php echo $mostrar['unit']?></td>
                                <td><?php echo $mostrar['quantity']?></td>
                                <td><a style="float:right; padding: 10px; margin: 5px; border-radius:100%;" class="btn btn-primary" href="editarp.php?id=<?php echo $mostrar['id'];?>"><i class="fa fa-pencil fa-lg" aria-hidden="true"></i></a></td>
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
        <h3>Cuarto Semestre de Programación.</h3>
        </div>
    </footer>
</body>
</html>