<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/d753ff1474.js"></script>
    <link rel="stylesheet" href="styleform.css">
    <link rel="icon" href="img/cimarron.png">
    <title>Modificar: Ejemplar</title>
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
				<a href="examinar.php">REGRESAR</a>
				<a href="http://localhost/c/pc/p2/" style="float:right">INDEX</a>
			</div>
		</nav>
    <section>
		<div class="container">
			<div class="card">
				<div class="row">
					<h1>Modificar: Ejemplar</h1>
					<?php 
						include("funciones.php");
						$id = $_GET['id'];
						seleccionacampo('libros','id',$id);
					?>
                    <main>
						<form action="" method="post">
							<div class="row">
								<div class="col-25">
									<label for="cve">Identificador</label>
								</div>
								<div class="col-75">
									<input type="number" id="id" name="id" value="<?php echo $row->id;?>" placeholder="Identificador... " required>
								</div>
							</div>
							<div class="row">
								<div class="col-25">
									<label for="clasif">Clasificación</label>
								</div>
								<div class="col-75">
									<input type="number" id="clasif" name="clasif" value="<?php echo $row->clasif;?>" placeholder="Clasificación... " required>
								</div>
							</div>
							<div class="row">
								<div class="col-25">
									<label for="nombre">Nombre</label>
								</div>
								<div class="col-75">
									<input type="text" id="nombre" name="nombre" value="<?php echo $row->nombre;?>" placeholder="Nombre..." required>
								</div>
							</div>
							<div class="row">
								<div class="col-25">
									<label for="edicion">Edición</label>
								</div>
								<div class="col-75">
									<input type="number" id="edicion" name="edicion" value="<?php echo $row->edicion;?>" placeholder="Edición...">
								</div>
							</div>
							<div class="row">
								<div class="col-25">
									<label for="autor">Autor</label>
								</div>
								<div class="col-75">
									<input type="text" id="autor" name="autor" value="<?php echo $row->autor;?>" placeholder="Autor...">
								</div>
							</div>
							<div class="row">
								<div class="col-25">
									<label for="year">Año</label>
								</div>
								<div class="col-75">
									<input type="number" id="year" name="year" value="<?php echo $row->year;?>" placeholder="Año...">
								</div>
							</div>
							<div class="row">
								<div class="col-25">
									<label for="ejemplares">Ejemplares</label>
								</div>	
								<div class="col-75">
									<input type="number" id="ejemplares" name="ejemplares" value="<?php echo $row->ejemplares;?>" placeholder="Número de ejemplares...">
								</div>
							</div>
							<div class="row">
								<div class="col-25">
									<label for="genero">Genero</label>
								</div>
								<div class="col-75">
									<input type="text" id="genero" name="genero" value="<?php echo $row->genero;?>" placeholder="Genero literario...">
								</div>
							</div>
							<br>
						<div class="row">
							<input type="submit" name="submit" value="Grabar datos"> 
							<input type="reset" value="Borrar todo">
						</div>
						</form>
                    </main>
					<?php
						if(isset($_POST['submit'])){
						$campos = array("id"=>$_POST['id'], "clasif"=>$_POST['clasif'],"nombre"=>$_POST['nombre'],"edicion"=>$_POST['edicion'],"autor"=>$_POST['autor'],"year"=>$_POST['year'],"genero"=>$_POST['genero'],"ejemplares"=>$_POST['ejemplares']);
						$tbl = "libros";
						editarf($tbl,$campos,'id',$id);
						header("location:examinar.php");
						}
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