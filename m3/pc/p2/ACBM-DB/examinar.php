<?php
include("funcioneseditar.php");
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
    <title>Consulta: Modificar</title>
</head>
<body>
    <header>
        <div class="header">
            <h1>Biblioteca</h1>
            <p>Base de Datos</p>
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
                    <h1>Consulta: Ejemplares</h1>
                    <main>
                        <table>
                            <tr>
                                <td>Identificador</td>
                                <td>Clasificación</td>
                                <td>Nombre</td>
                                <td>Edición</td>
                                <td>Autor</td>
                                <td>Año</td>
                                <td>Ejemplares</td>
                                <td>Genero</td>
                            </tr>       
                            <?php
                                $sql ="SELECT * FROM libros";
                                $resultado=mysqli_query($conexion,$sql);
                                while($mostrar=mysqli_fetch_array($resultado)) {
                            ?> 
                            <tr>
                            <td>
                                <?php echo $mostrar['id']?></td>
                                <td><?php echo $mostrar['clasif']?></td>
                                <td><?php echo $mostrar['nombre']?></td>
                                <td><?php echo $mostrar['edicion']?></td>
                                <td><?php echo $mostrar['autor']?></td>
                                <td><?php echo $mostrar['year']?></td>
                                <td><?php echo $mostrar['ejemplares']?></td>
                                <td><?php echo $mostrar['genero']?></td>
                                <td><a style="float:right; padding: 10px; margin: 5px; border-radius:100%;" class="btn btn-primary" href="modificar.php?id=<?php echo $mostrar['id'];?>"><i class="fa fa-pencil fa-lg" aria-hidden="true"></i></a></td>
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
        <h3>Camacho Orantes, Ángel Isaac.</h3>
        <h3>Cuarto Semestre de Programación.</h3>
        </div>
    </footer>
</body>
</html>
<!-- Pérez Pérez, Kevin Fernando. Cuarto Semestre de Programación T.M.-->